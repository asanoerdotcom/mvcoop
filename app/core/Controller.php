<?php

class Controller
{
    # Fungsi ini memanggil View dalam folder Views
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    # Fungsi ini memanggil Model dalam folder models
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }
}
