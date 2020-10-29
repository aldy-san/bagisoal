<?php

class M_admin extends CI_Model
{
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_data($table)
    {
        return $this->db->get($table);
    }
}
