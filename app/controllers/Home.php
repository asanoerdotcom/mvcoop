<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Index Home";
        $this->view('templet/header', $data);
        $this->view('home/index');
        $this->view('templet/footer');
    }
}
