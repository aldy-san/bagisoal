<?php

class M_soal extends CI_Model
{
    public function tampil_data($table, $limit, $start, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
    public function cekTerjawab($id, $soal)
    {
        $query = $this->db->get_where('user_soal', array('id_user' => $id, 'kode_soal' => $soal));
        if ($query->num_rows() === 0) {
            return false;
        } else {
            return true;
        }
    }
    public function cekJawaban($id, $soal)
    {
        $this->db->select('user_soal.jawaban');
        $this->db->from('user_soal');
        $this->db->join('soal', 'soal.jawaban = user_soal.jawaban');
        $this->db->where(array('id_user' => $id, 'user_soal.kode_soal' => $soal, 'soal.kode_soal' => $soal));
        $jawaban = $this->db->get()->result();
        if ($jawaban) {
            return true;
        } else {
            return false;
        }
    }
    public function jawab($data)
    {
        $this->db->insert('user_soal', $data);
    }
}
