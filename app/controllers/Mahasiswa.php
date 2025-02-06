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

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByID($id);
        $this->view('templet/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templet/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'disimpan', 'success');
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'disimpan', 'danger');
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . 'mahasiswa');
            exit;
        }
    }
}
