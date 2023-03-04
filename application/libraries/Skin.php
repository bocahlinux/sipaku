<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Skin
{
    var $template_data = array();

    function set($name, $value)
    {
        $this->template_data[$name] = $value;
    }

    function admin($view = '', $view_data = array(), $return = FALSE)
    {
        $this->CI = &get_instance();
        $this->set('content', $this->CI->load->view($view, $view_data, TRUE));
        $this->set('header', $this->CI->load->view('admin/template/header', $view_data, TRUE));
        $this->set('menu', $this->CI->load->view('admin/template/menu', $view_data, TRUE));
        $this->set('footer', $this->CI->load->view('admin/template/footer', $view_data, TRUE));
        return $this->CI->load->view('admin/template/dashboard', $this->template_data, $return);
    }
}
