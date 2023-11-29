<?php

class WilayahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        must_login(); //helper
        only_admin(); //hanya admin yg mengelola data pengguna
        $this->load->model('wilayahmodel');
    }

    public function index()
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
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('wilayah');
    }

    public function edit_kec()
    {
        $post = $this->input->post(null, TRUE);
        $id = $this->input->post('id');

        $this->wilayahmodel->update_kec($post, $id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('edit', 'Data berhasil diedit');
        }
        redirect('wilayah');
    }

    public function delete_kec()
    {
        $id = $this->input->post('id');

        $this->wilayahmodel->delete_kec($id);
        $this->session->set_flashdata('delete', 'Data berhasil dihapus');
        redirect('wilayah');
    }

    public function add_ds()
    {
        $post = $this->input->post(null, TRUE);

        $this->wilayahmodel->insert_ds($post);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan');
        redirect('wilayah');
    }

    public function edit_ds()
    {
        $post = $this->input->post(null, TRUE);
        $id = $this->input->post('id');

        $this->wilayahmodel->update_ds($post, $id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('edit', 'Data berhasil diedit');
        }
        redirect('wilayah');
    }

    public function delete_ds()
    {
        $id = $this->input->post('id');

        $this->wilayahmodel->delete_ds($id);
        $this->session->set_flashdata('delete', 'Data berhasil dihapus');
        redirect('wilayah');
    }

    public function get_desa_by_kecamatan()
    {
        $id_kecamatan = $this->input->post('id_kecamatan');
        $data_desa = $this->wilayahmodel->get_desa_by_kecamatan($id_kecamatan)->result();
        echo json_encode($data_desa);
    }
}
