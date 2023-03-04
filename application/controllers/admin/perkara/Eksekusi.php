<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Eksekusi extends CI_Controller
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
        $key = '';
        $eksekusi = $this->M_eksekusi->viewdataEksekusi()->result();
        // $biaya = $this->M_eksekusi->viewPerkaraBiaya()->row();
        $tbl = '';
        $no = 1;
        foreach ($eksekusi as $qx)
            $tbl .= '<tr class="text-center" style="font-size:14px;">
                         <td>' . $no++ . '</td>
                         <td>' . $qx->nomor_perkara_pn . '</td>
                         <td>' . $this->tanggal->tgl_indo_hari($qx->permohonan_eksekusi) . '</td>
                         <td class="text-center">
                              <a href="javascript:;" class="badge badge-primary" data-toggle="modal" data-target="#eksekusi' . $qx->id . '"> <i class="fa fa-eye"></i></a> 
                         </td>
                         <td class="text-center">
                              <a href="javascript:;" class="badge badge-info" data-toggle="modal" data-target="#tanggal' . $qx->id . '"> <i class="fa fa-pen"></i></a> 
                         </td>
                     </tr>
                ';

        $data = array(
            'class'              => "Eksekusi",
            'title'              => "<span style='font-weight:bold;'>Halaman Eksekusi</span>",
            'small'              => "Perkara",
            'small_title'        => "Eksekusi",
            'eksekusi'           => $tbl,
            'm_eksekusi'         => $this->M_eksekusi->viewdataEksekusi()->result(),
        );
        $this->skin->admin('admin/perkara/eksekusi/v_eksekusi', $data);
    }
}
