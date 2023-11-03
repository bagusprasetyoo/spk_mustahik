<?php

class WilayahModel extends CI_Model
{
    public function get_kec()
    {
        $this->db->from('tb_kecamatan');
        return $this->db->get();
    }

    public function get_ds()
    {
        $this->db->from('tb_desa');
        $this->db->join('tb_kecamatan', 'tb_desa.id_kecamatan = tb_kecamatan.id');
        return $this->db->get();
    }

    public function insert_kec($post)
    {
        $data = [
            'nama_kecamatan' => $post['kec']
        ];
        return $this->db->insert('tb_kecamatan', $data);
    }

    public function insert_ds($post)
    {
        $data = [
            'id_kecamatan' => $post['id_kec'],
            'nama_desa' => $post['ds'],
        ];
        return $this->db->insert('tb_desa', $data);
    }
}
