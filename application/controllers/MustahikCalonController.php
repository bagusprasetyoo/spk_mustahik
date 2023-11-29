<?php

class MustahikCalonController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        must_login(); //helper      
        // memanggil model
        $this->load->model('mustahikmodel');
        $this->load->model('wilayahmodel');
    }

    public function index()
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

    public function add()
    {
        $post = $this->input->post(null, TRUE);

        $this->mustahikmodel->insert($post);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('calonmustahik');
    }

    public function edit()
    {
        $post = $this->input->post(null, TRUE);
        $id = $this->input->post('id');
        // var_dump($post);

        $this->mustahikmodel->update($post, $id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('edit', 'Data berhasil diedit');
        }
        redirect('calonmustahik');
    }

    public function delete()
    {
        $id = $this->input->post('id');

        $this->mustahikmodel->delete($id);

        $this->session->set_flashdata('delete', 'Data berhasil dihapus');
        redirect('calonmustahik');
    }

    public function check_nik()
    {
        if (array_key_exists('nik', $_POST)) {
            if ($this->mustahikmodel->check_nik($this->input->post('nik')) == TRUE) {
                echo json_encode(FALSE);
            } else {
                echo json_encode(TRUE);
            }
        }
    }
}
