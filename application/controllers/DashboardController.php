<?php

class DashboardController extends CI_Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        $this->mylib->layouting('dashboard/index', $data);
    }
}
