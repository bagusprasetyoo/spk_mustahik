<?php

class MustahikModel extends CI_Model
{
    public function get()
    {
        $this->db->from('tb_mustahik');
        return $this->db->get();
    }
}
