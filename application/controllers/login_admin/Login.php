<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('admin/login/M_login_admin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required'         => 'Username Tidak Boleh Kosong',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', [
            'required'         =>  'Password Tidak Boleh Kosong',
            'min_length'       =>  'Password Minimal 5 Digit'
        ]);

        if ($this->form_validation->run() == False) {
            $this->load->view('login_admin/template_header/header');
            $this->load->view('login_admin/template_body/body');
            $this->load->view('login_admin/template_footer/footer');
        } else {
            $username = anti_injection($this->input->post('username', TRUE));
            $password = anti_injection($this->input->post('username', TRUE));
            if ($this->M_login_admin->cek_login($username, $password)->num_rows() == 1) {
                $qs = $this->M_login_admin->cek_login($username)->row();
                if ($qs->username == $username) {
                    if (hash_verified(anti_injection($this->input->post('password', TRUE)), $qs->password)) {
                        $arr_result = array(
                            'username' => ucfirst($qs->$username),
                            'id_admin' => $qs->id_admin,
                            'name'     => $qs->name,
                            'password' => $qs->password,
                            'image'    => $qs->image,
                            'status'   => "login"
                        );

                        $this->session->set_userdata($arr_result);
                        $this->session->set_flashdata('success', 'Selamat Anda Berhasil Login');
                        redirect('Dashboard.html');
                    } else {
                        $this->session->set_flashdata('password', 'Password Tidak Sesuai!!');
                        redirect('Login-Admin.html');
                    }
                } else {
                    $this->session->set_flashdata('username', 'Pastikan Username Anda Sesuai!!');
                    redirect('Login-Admin.html');
                }
            } else {
                $this->session->set_flashdata('failed', 'Akun Anda Belum Terdaftar');
                redirect('Login-Admin.html');
            }
        }
    }



    public function logout()
    {
        // $this->session->sess_destroy();
        $this->load->driver('cache');
        $this->cache->clean();
        ob_clean();
        $this->session->set_flashdata('logout', 'Selamat Anda Berhasil Logout');
        redirect('Login-Admin.html');
    }
}
