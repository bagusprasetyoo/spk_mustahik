<?php

class MustahikController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // memanggil model
        $this->load->model('mustahikmodel');
    }

    public function index()
    {
        $data = [
            'all_mustahik' => $this->mustahikmodel->get()->result(),
            'title' => 'Calon Mustahik',
        ];

        /* memanfaatkan library buatan sendiri untuk memperingkas sintaks */
        $this->mylib->layouting('mustahik/calon_mustahik', $data);
    }
}
