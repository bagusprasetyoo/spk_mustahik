<?php

class MustahikRekomendasiController extends CI_Controller
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
            'title' => 'Rekomendasi Mustahik',
        ];

        /* memanfaatkan library buatan sendiri untuk memperingkas sintaks */
        $this->mylib->layouting('mustahik_rekomendasi/index', $data);
    }

    public function add()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function delete()
    {
        //
    }
}
