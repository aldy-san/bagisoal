<?php

class M_user extends CI_Model
{
    public function edit_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
}
