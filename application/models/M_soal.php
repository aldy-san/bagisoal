<?php

class M_soal extends CI_Model
{
    public function tampil_data($table, $limit, $start, $order)
    {
        $this->db->from($table);
        $this->db->order_by($order, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
    public function tampil_data_log($table, $limit, $start, $id, $where)
    {
        $this->db->from($table);
        $this->db->join('soal', 'soal.kode_soal = ' . $table . '.kode_soal');
        $this->db->where($where);
        $this->db->order_by($id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get()->result();
    }
    public function cekTerjawab($id, $soal)
    {
        $this->db->select('user_soal.jawaban');
        $this->db->from('user_soal');
        $this->db->join('soal', 'soal.jawaban = user_soal.jawaban');
        $this->db->where(array('id_user' => $id, 'user_soal.kode_soal' => $soal, 'soal.kode_soal' => $soal));
        $query = $this->db->get()->num_rows();
        if ($query === 0) {
            return false;
        } else {
            return true;
        }
    }
    public function tampil_data_join_user($table, $limit, $start, $id)
    {
        $this->db->from($table);
        $this->db->join('users', $table . '.id_user = users.id_user');
        $this->db->order_by($id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
    public function tampil_data_join($table, $id)
    {
        $this->db->from($table);
        $this->db->join('users', $table . '.id_user = users.id_user');
        $this->db->order_by($id, 'DESC');
        return $this->db->get();
    }
    public function user_jumlah_jawab($id)
    {
        $this->db->from('user_soal');
        $this->db->where(array('id_user' => $id));
        return $this->db->get()->num_rows();
    }
    public function user_jumlah_hasil($id, $hasil)
    {
        $this->db->from('user_soal');
        $this->db->where(array('id_user' => $id, 'hasil' => $hasil));
        return $this->db->get()->num_rows();
    }
    public function soal_jumlah_jawab($kode)
    {
        $this->db->from('user_soal');
        $this->db->where(array('kode_soal' => $kode));
        return $this->db->get()->num_rows();
    }
    public function soal_jumlah_hasil($kode, $hasil)
    {
        $this->db->from('user_soal');
        $this->db->where(array('kode_soal' => $kode, 'hasil' => $hasil));
        return $this->db->get()->num_rows();
    }
    public function cekJawaban($soal, $jawaban)
    {
        $this->db->select('jawaban');
        $this->db->from('soal');
        $this->db->where(array('kode_soal' => $soal));
        $kunci = $this->db->get()->result();

        if ($jawaban == $kunci[0]->jawaban) {
            return true;
        } else {
            return false;
        }
    }
    public function jawab($data)
    {
        $this->db->insert('user_soal', $data);
    }

    public function tambah_poin($id, $kode)
    {
        $poin_soal = $this->db->get_where('soal', ['kode_soal' => $kode])->row()->poin;
        $poin_user = $this->db->get_where('users', ['id_user' => $id])->row()->total_poin;
        $poin_baru = $poin_user + $poin_soal;
        $this->db->update('users', array('total_poin' => $poin_baru), array('id_user' => $id));
    }
}
