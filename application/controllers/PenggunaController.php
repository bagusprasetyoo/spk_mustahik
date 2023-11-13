<?php

class PenggunaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        must_login(); //helper
        only_admin(); //hanya admin yg mengelola data pengguna
        $this->load->model('penggunamodel'); // memanggil model
    }

    public function index()
    {
        $data = [
            'all_pengguna' => $this->penggunamodel->get()->result(),
            'title' => 'Pengguna',
        ];

        $this->mylib->layouting('pengguna/index', $data);
    }

    public function add()
    {
        $post = $this->input->post(null, TRUE);

        $this->penggunamodel->insert($post);

        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('pengguna');
    }

    public function edit()
    {
        $post = $this->input->post(null, TRUE);
        $id = $this->input->post('id');

        $this->penggunamodel->update($post, $id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('edit', 'Data berhasil diedit');
        }
        redirect('pengguna');
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $this->penggunamodel->delete($id);

        $this->session->set_flashdata('delete', 'Data berhasil dihapus');
        redirect('pengguna');
    }

    // method check username untuk jquery validation
    public function check_username()
    {
        if (array_key_exists('username', $_POST)) {
            if ($this->penggunamodel->check_username($this->input->post('username')) == TRUE) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }
}
