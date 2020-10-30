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
    public function hapus_soal($id)
    {
        $this->db->where('kode_soal', $id);
        $this->db->delete('soal');
    }
    public function hapus_users($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('users');
    }
}
