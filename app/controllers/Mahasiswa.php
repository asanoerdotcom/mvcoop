<?php


class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templet/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templet/footer');
    }
}
