<?php

class M_login_admin extends CI_Model
{
    function cek_login($username)
    {
        $this->db->where('username', $username);
        $this->db->where('status', 'Y');
        return $this->db->get('tbl_admin');
    }

    public function get($id = null)
    {
        $this->db->from('tbl_admin');
        if ($id != null) {
            $this->db->where('id_admin', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
