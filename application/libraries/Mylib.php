<?php

class Mylib
{
    protected $ci;

    function __construct()
    {
        // get_instance berfunsi untuk menginstansi class agar dapat mengakses resource CI
        $this->ci = &get_instance();
    }

    /* karena bagian ini sering dipakai berulang kali jadi
    dibuat sebuah library untuk memperingkas penulisan sintaks */
    function layouting($content, $data = null)
    {
        $this->ci->load->view('layouts/header', $data);
        $this->ci->load->view('layouts/menu', $data);
        $this->ci->load->view($content, $data);
        $this->ci->load->view('layouts/footer', $data);
    }
}
