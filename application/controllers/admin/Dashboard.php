<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    // function __construct()
    // {
    //     parent::__construct();
    //     if ($this->session->userdata('status') != "login") {
    //         $this->session->set_flashdata('login', 'Anda Harus Login Terlebih Dahulu');
    //         redirect(base_url("Login-Admin.html"));
    //     }
    //     $this->load->helper('url');
    //     $this->load->model('admin/dashboard/M_content');
    //     $this->load->library('session');
    // }

    public function index()
    {
        $data = array(
            'class'              => "Dashboard",
            'title'              => "<span style='font-weight:bold;'>Halaman Dashboard</span>",
            'small'              => "Home",
            'small_title'        => "Dashboard",
        );
        $this->skin->admin('admin/template/content', $data);
    }
}
