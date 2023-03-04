<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bocah_ngoding extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = array(
            'text'          =>  ' SIMANTUEL | PTUN Palangka Raya'
        );
        $this->load->view('bocah_ngoding', $data);
    }
}
