<?php

class M_admin extends CI_Model
{
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    public function edit_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function tampil_semuaData($table, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        return $this->db->get();
    }
    public function hapus_data($table, $id, $column)
    {
        $this->db->where($column, $id);
        $this->db->delete($table);
    }
    public function tampil_data($table, $limit, $start, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
    public function tampil_data_soal($table, $limit, $start, $id, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->order_by($id, 'DESC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
    public function tampil_data_limit($table, $limit, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }
    public function tampil_log_admin($limit, $admin)
    {
        $this->db->from('log_admin');
        $this->db->where(array('id_admin' => $admin));
        $this->db->order_by('id', 'DESC');
        $this->db->limit($limit);
        return $this->db->get();
    }
    public function jumlah_baris($table)
    {
        return $this->db->get($table)->num_rows();
    }
    public function jumlah_baris_soal($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->num_rows();
    }
}
