<?php

class Controller
{
    # Fungsi ini memanggil View dalam folder Views
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
