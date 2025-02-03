<?php

class About extends Controller
{
    public function index($nama = "Khasan", $pekerjaan = "Programmer")
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = "About Me";
        $this->view('templet/header', $data);
        $this->view('about/index', $data);
        $this->view('templet/footer');
    }

    public function detail()
    {
        $data['judul'] = "Tentang Dia";
        $this->view('templet/header', $data);
        $this->view('about/page');
        $this->view('templet/footer');
    }
}
