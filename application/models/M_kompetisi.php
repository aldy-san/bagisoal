<?php

class M_kompetisi extends CI_Model
{
    public function tambah_data($data)
    {
        $this->db->insert('kompetisi', $data);
    }
    public function tampil_pendaftar($kode_kompetisi)
    {
        $this->db->from('user_kompetisi');
        $this->db->join('users', 'users.id_user = user_kompetisi.id_user');
        $this->db->where(['kode_kompetisi' => $kode_kompetisi]);
        return $this->db->get();
    }
    public function cekTerdaftar($id, $kode)
    {
        $query = $this->db->get_where('user_kompetisi', ['id_user' => $id, 'kode_kompetisi' => $kode])->num_rows();
        if ($query === 0) {
            return false;
        } else {
            return true;
        }
    }
}
