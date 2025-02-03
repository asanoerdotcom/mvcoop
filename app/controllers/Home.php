<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Halaman Index Home";
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templet/header', $data);
        $this->view('home/index', $data);
        $this->view('templet/footer');
    }
}
