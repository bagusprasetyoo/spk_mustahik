<?php

class PenggunaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model
        $this->load->model('penggunamodel');
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
        redirect('penggunacontroller');
    }

    public function edit()
    {
        $post = $this->input->post(null, TRUE);
        $id = $this->input->post('id');

        $this->penggunamodel->update($post, $id);
        redirect('penggunacontroller');
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $this->penggunamodel->delete($id);
        redirect('penggunacontroller');
    }

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
