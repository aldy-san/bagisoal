<?php

class M_kompetisi extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('kompetisi', $data);
    }
}
