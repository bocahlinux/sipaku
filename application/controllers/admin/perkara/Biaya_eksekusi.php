<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Biaya_eksekusi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') != "login") {
        //     $this->session->set_flashdata('login', 'Anda Harus Login Terlebih Dahulu');
        //     redirect(base_url("Login-Admin.html"));
        // }
        $this->load->helper('url');
        $this->load->model(array('admin/perkara/M_eksekusi'));
        // $this->load->library('session');
    }

    public function index()
    {
        $data = array(
            'class'              => "Biaya Eksekusi",
            'title'              => "<span style='font-weight:bold;'>Halaman Biaya Eksekusi</span>",
            'small'              => "Perkara",
            'small_title'        => "Biaya Eksekusi",
        );

        $this->skin->admin('admin/perkara/biaya_eksekusi/v_biaya_eksekusi', $data);
    }

    function dt_eksekusi()
    {
        $requestData    = $_REQUEST;
        $fetch            = $this->M_eksekusi->fetch_data($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

        $totalData        = $fetch['totalData'];
        $totalFiltered    = $fetch['totalFiltered'];
        $query            = $fetch['query'];

        $data    = array();
        foreach ($query->result_array() as $row) {
            $nestedData = array();

            $nestedData[]    = $row['nomor'];
            $nestedData[]    = $row['noPerkara'];
            $nestedData[]    = $row['statusAkhir'];
            $nestedData[]    = '<td>
            <a href="javascript:;" class="badge badge-primary" data-toggle="modal" data-target="#biayaEksekusi" data-id="' . $row['ID'] . '" data-noperkara="' . $row['noPerkara'] . '"  data-statusakhir="' . $row['statusAkhir'] . '" >Detail Biaya</a>
       </td>';
            $nestedData[]    = $row['nomor'];

            $data[] = $nestedData;
        }

        $json_data = array(
            "draw"            => intval($requestData['draw']),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );

        echo json_encode($json_data);
    }

    function fetch_detail()
    {
        $nokar = $this->input->post('getPerkara');
        if (!empty($nokar)) {
            $requestData    = $_REQUEST;
            $fetch            = $this->M_eksekusi->fetch_detail($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length'], $nokar);

            $totalData        = $fetch['totalData'];
            $totalFiltered    = $fetch['totalFiltered'];
            $query            = $fetch['query'];

            $saldo = 0;
            $tot_pengeluaran = 0;
            $tot_sisa = 0;

            $data    = array();
            foreach ($query->result_array() as $row) {
                $nestedData = array();

                $nestedData['nomor']    = $row['noPerkara'];
                $nestedData['tanggal']    = $row['tglTransaksi'];
                $nestedData['uraian']    = $row['uraian'];
                $nestedData['pemasukan']    = "Rp. " . str_replace(",", ".", number_format($row['pemasukan']));
                $nestedData['pengeluaran']    = "Rp. " . str_replace(",", ".", number_format($row['pengeluaran']));
                $saldo = $saldo + $row['pemasukan'] - $row['pengeluaran'];
                $nestedData['saldo']    = "Rp. " . str_replace(",", ".", number_format($saldo));
                $data[] = $nestedData;
            }

            $json_data = array(
                "draw"            => intval($requestData['draw']),
                "recordsTotal"    => intval($totalData),
                "recordsFiltered" => intval($totalFiltered),
                "data"            => $data
            );

            echo json_encode($json_data);
        } else {
            echo json_encode('gagal');
            # code...
        }
        // echo json_encode($nokar);
    }
}
