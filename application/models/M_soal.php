<?php

class M_soal extends CI_Model
{
    public function tampil_data($data)
    {
        return $this->db->get('soal');
    }
}
