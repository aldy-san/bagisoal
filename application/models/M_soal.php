<?php

class M_soal extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('soal', $data);
    }
}
