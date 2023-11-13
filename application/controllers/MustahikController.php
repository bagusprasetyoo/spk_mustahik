<?php

class MustahikController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        must_login(); //helper      
        // memanggil model
        $this->load->model('mustahikmodel');
        $this->load->model('wilayahmodel');
    }

    public function show_calon_mustahik()
    {
        $data = [
            'all_mustahik' => $this->mustahikmodel->get()->result(),
            'all_kecamatan' => $this->wilayahmodel->get_kec()->result(),
            'all_desa' => $this->wilayahmodel->get_ds()->result(),
            'title' => 'Calon Mustahik',
        ];

        /* memanfaatkan library buatan sendiri untuk memperingkas sintaks */
        $this->mylib->layouting('mustahik_calon/index', $data);
    }

    public function add_calon_mustahik()
    {
        $post = $this->input->post(null, TRUE);

        $this->mustahikmodel->insert_mustahik($post);
        redirect('mustahikcontroller/show_calon_mustahik');
    }

    public function edit_calon_mustahik()
    {
        $post = $this->input->post(null, TRUE);
        $id = $this->input->post('nik');

        $this->mustahikmodel->update_mustahik($post, $id);
        redirect('mustahikcontroller/show_calon_mustahik');
    }

    public function delete_calon_mustahik()
    {
    }
}
