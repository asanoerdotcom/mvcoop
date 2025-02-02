<?php

class About
{
    public function index($nama = "Khasan", $pekerjaan = "Programmer")
    {
        echo "Saya adalah $nama seorang $pekerjaan .";
    }

    public function page()
    {
        echo "This is the about page";
    }
}
