<?php

class WilayahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('wilayahmodel');
    }

    public function wilayah()
    {
        $data = [
            'title' => 'Kecamatan & Desa',
            'all_kecamatan' => $this->wilayahmodel->get_kec()->result(),
            'all_desa' => $this->wilayahmodel->get_ds()->result(),
        ];
        $this->mylib->layouting('wilayah/index', $data);
    }

    public function add_kec()
    {
        $post = $this->input->post(null, TRUE);

        $this->wilayahmodel->insert_kec($post);
        redirect('wilayahcontroller/wilayah');
    }

    public function edit_kec()
    {
    }

    public function delete_kec()
    {
    }

    public function add_ds()
    {
        $post = $this->input->post(null, TRUE);

        $this->wilayahmodel->insert_ds($post);
        redirect('wilayahcontroller/wilayah');
    }

    public function edit_ds()
    {
    }

    public function delete_ds()
    {
    }
}
