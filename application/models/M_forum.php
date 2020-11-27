<?php

class M_forum extends CI_Model
{
    public function update_forum($id, $where, $old)
    {
        $this->db->where(['id_pertanyaan' => $id]);
        $this->db->update('forum', [$where => $old += 1]);
    }
    public function update_votes($id, $where, $new)
    {
        $this->db->where(['id_pertanyaan' => $id]);
        $this->db->update('votes', [$where => $new]);
    }
}
