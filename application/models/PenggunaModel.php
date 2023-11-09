<?php

class PenggunaModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // mengatur waktu default untuk inputan tanggal
        date_default_timezone_set('Asia/Makassar');
    }

    public function get()
    {
        $this->db->from('tb_pengguna');
        return $this->db->get();
    }

    public function insert($post)
    {
        $data = [
            'username' => $post['username'],
            'password' =>  password_hash($post['password'], PASSWORD_DEFAULT),
            'level' => $post['level'],
            'nama_pengguna' => $post['nama_pengguna'],
            'created_at' => date('Y-m-d H:i:s'),
        ];
        return $this->db->insert('tb_pengguna', $data);
    }

    public function update($post, $id)
    {
        $data = [
            'level' => $post['level'],
            'nama_pengguna' => $post['nama_pengguna'],
        ];
        $this->db->where('id_pengguna',  $id);
        return $this->db->update('tb_pengguna', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->delete('tb_pengguna');
    }

    public function check_username($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('tb_pengguna');
        if ($query->num_rows() > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
