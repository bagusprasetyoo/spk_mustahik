<?php

class DashboardController extends CI_Controller
{
    public function index()
    {
        must_login(); //helper
        $data = [
            'title' => 'Dashboard'
        ];
        $this->mylib->layouting('dashboard/index', $data);
    }
}
