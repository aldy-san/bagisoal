<?php

class M_forum extends CI_Model
{
    public function update_forum($id, $where, $old)
    {
        $this->db->where(['id_pertanyaan' => $id]);
        $this->db->update('forum', [$where => $old += 1]);
    }
    public function update_votes($id, $where, $new, $id_user)
    {
        $this->db->where(['id_pertanyaan' => $id, 'id_user' => $id_user]);
        $this->db->update('votes', [$where => $new]);
    }
}
