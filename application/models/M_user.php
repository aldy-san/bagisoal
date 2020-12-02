<?php

class M_user extends CI_Model
{
    public function edit_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
    public function tampil_rank($id)
    {
        $sql = " 
        SELECT
        rank, id_user
        FROM
            (SELECT
             @rank:=@rank+1 AS rank, id_user
             FROM
             users, (SELECT @rank := 0) r
             ORDER BY  total_poin DESC, nama ASC
            ) t
        WHERE id_user = " . $id . "; ";
        return $this->db->query($sql)->row_array();
    }
    public function tampil_data($table, $limit, $start, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit($limit, $start);
        return $this->db->get();
    }
    public function tampil_data_limit($table, $limit, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit($limit);
        return $this->db->get();
    }
    public function tampil_komunitas_terbaru($table, $id)
    {
        $this->db->from($table);
        $this->db->order_by($id, 'DESC');
        $this->db->limit(5);
        return $this->db->get();
    }
}
