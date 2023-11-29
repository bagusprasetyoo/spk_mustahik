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
        $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_desa.id_kecamatan');
        return $this->db->get();
    }

    public function insert_kec($post)
    {
        $data = [
            'nama_kecamatan' => $post['nama_kec']
        ];
        return $this->db->insert('tb_kecamatan', $data);
    }

    public function insert_ds($post)
    {
        $data = [
            'id_kecamatan' => $post['id_kec'],
            'nama_desa' => $post['nama_ds'],
        ];
        return $this->db->insert('tb_desa', $data);
    }

    public function update_kec($post, $id)
    {
        $data = [
            'nama_kecamatan' => $post['nama_kec']
        ];
        $this->db->where('id_kecamatan',  $id);
        return $this->db->update('tb_kecamatan', $data);
    }

    public function update_ds($post, $id)
    {
        $data = [
            'id_kecamatan' => $post['id_kec'],
            'nama_desa' => $post['nama_ds'],
        ];
        $this->db->where('id_desa',  $id);
        return $this->db->update('tb_desa', $data);
    }

    public function delete_kec($id)
    {
        $this->db->where('id_kecamatan', $id);
        return $this->db->delete('tb_kecamatan');
    }

    public function delete_ds($id)
    {
        $this->db->where('id_desa', $id);
        return $this->db->delete('tb_desa');
    }

    public function get_desa_by_kecamatan($id_kecamatan)
    {
        $this->db->from('tb_desa');
        $this->db->where('id_kecamatan', $id_kecamatan);
        return $this->db->get();
    }
}
