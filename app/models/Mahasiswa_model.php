<?php

class Mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "Rizky Khapidsyah",
            "nim" => "L200180012",
            "email" => "rizkykhapidsyah@gmail.com",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Miftahudin",
            "nim" => "L200184569",
            "email" => "Miftahudin@gmail.com",
            "jurusan" => "Ilmu Jaringan"
        ],
        [
            "nama" => "Siska Oktapia",
            "nim" => "L200185869",
            "email" => "s1sk4@gmail.com",
            "jurusan" => "Farmasi Teknikal"
        ]
    ];
    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
