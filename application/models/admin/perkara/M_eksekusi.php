<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_eksekusi extends CI_Model
{
    public function viewdataEksekusi()
    {
        $this->db->select('id,perkara_id,nomor_perkara_pn,eksekusi_amar_putusan,permohonan_eksekusi,pemohon_eksekusi,panggilan_parapihak');
        $this->db->from('perkara_eksekusi')
            ->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query;
    }

    public function viewPerkaraBiaya()
    {
        $this->db->select('a.ID, a.IDTahapan, a.IDPerkara, a.tglTransaksi, a.uraian, a.nominal,a.keterangan,
                           b.IDPerkara,b.noPerkara,b.statusAkhir');
        $this->db->from('perkarabiayaweb as a')
            ->join('dataumumweb as b', 'a.IDPerkara = b.IDPerkara', 'LEFT')
            ->group_by('noPerkara')
            ->where('IDTahapan', "50")
            ->order_by('ID', "DESC");
        $query = $this->db->get();
        return $query;
    }

    public function detailPerkaraBiaya()
    {
        $this->db->select('a.ID,a.tglTransaksi,a.uraian,a.nominal,
                         b.IDPerkara,b.noPerkara,b.statusAkhir');
        $this->db->from('perkarabiayaweb as a')
            ->join('dataumumweb as b', 'a.IDPerkara = b.IDPerkara', 'LEFT')
            // ->where('noPerkara', "31/G/2020/PTUN.PLK")
            ->where('IDTahapan', "50");
        $query = $this->db->get();
        return $query;
    }

    function fetch_data($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
    {
        $sql = "
        SELECT 
            ROW_NUMBER() OVER(ORDER BY a.ID ASC) AS \"nomor\",
            a.ID, a.IDTahapan, a.IDPerkara, a.tglTransaksi, a.uraian, a.nominal,a.keterangan,
                    b.IDPerkara,b.noPerkara,b.statusAkhir,
                    c.nama AS \"jenis_proses\"
                    FROM 
            perkarabiayaweb AS a 
        LEFT JOIN dataumumweb b ON a.IDPerkara = b.IDPerkara 
        LEFT JOIN tahapan_proses c ON a.IDTahapan=c.Id
        , (SELECT @row := 0) r
        WHERE nama = 'Eksekusi'
		";


        if (!empty($like_value)) {
            $sql .= " AND ( ";
            $sql .= "
				b.noPerkara LIKE '%" . $this->db->escape_like_str($like_value) . "%' 
				OR b.statusAkhir LIKE '%" . $this->db->escape_like_str($like_value) . "%' 
			";
            $sql .= " ) ";
        }
        $sql .= " GROUP BY noPerkara";

        $data['totalData'] = $this->db->query($sql)->num_rows();
        $data['totalFiltered']    = $this->db->query($sql)->num_rows();

        $columns_order_by = array(
            0 => 'nomor',
            1 => 'b.noPerkara',
            2 => 'b.statusAkhir',

        );


        $sql .= " ORDER BY " . $columns_order_by[$column_order] . " " . $column_dir . ", nomor ";
        $sql .= " LIMIT " . $limit_start . " ," . $limit_length . " ";

        $data['query'] = $this->db->query($sql);
        return $data;
    }

    function fetch_detail($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL, $nokar)
    {
        $sql = "
            SELECT ROW_NUMBER() OVER(ORDER BY a.ID ASC) AS 'nomor', 
            a.ID,a.tglTransaksi,a.uraian, a.nominal,
            IF(a.`jenisTransaksi`=1,a.nominal,0) AS 'pemasukan',
            IF(a.`jenisTransaksi`=-1,a.nominal,0) AS 'pengeluaran',
                IF(a.jenisTransaksi=1,'Pemasukan','Pengeluaran') AS 'ket',
                         b.IDPerkara,
                         b.noPerkara,
                         b.statusAkhir
            FROM perkarabiayaweb a
            LEFT JOIN dataumumweb b ON a.IDPerkara=b.IDPerkara
            
            WHERE 
            noPerkara='$nokar'
            AND IDTahapan=50
		";


        if (!empty($like_value)) {
            $sql .= " AND ( ";
            $sql .= "
				a.uraian LIKE '%" . $this->db->escape_like_str($like_value) . "%' 
			";
            $sql .= " ) ";
        }

        $data['totalData'] = $this->db->query($sql)->num_rows();
        $data['totalFiltered']    = $this->db->query($sql)->num_rows();

        $columns_order_by = array(
            0 => 'b.noPerkara',
            1 => 'a.tglTransaksi',
            2 => 'a.uraian',
            3 => 'pemasukan',
            4 => 'pengeluaran',

        );


        $sql .= " ORDER BY " . $columns_order_by[$column_order] . " " . $column_dir . ", nomor ";
        $sql .= " LIMIT " . $limit_start . " ," . $limit_length . " ";

        $data['query'] = $this->db->query($sql);
        return $data;
    }
}
