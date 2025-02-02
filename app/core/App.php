<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = array();

    public function __construct()
    {
        $url = $this->parseURL();

        # Check if controller exists (cek jika ada kontroller tersebut)
        if (isset($url[0])) {
            if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        #check if method exists (cek methodnya di URL [1])
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        #check if params exists (cek parameter di URL [2] dst ...)
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        # Call the controller method (panggil method & controller) dengan parameter, jika ada.
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); # remove trailing slash (yang terakhir yaa)
            $url = filter_var($url, FILTER_SANITIZE_URL); # filter url (bersihkan URL dari karakter sembarang)
            $url = explode('/', $url);  # pecah URL menjadi array (untuk diambil nilai controller, method, dan parameter)
            return $url;
        }
    }
}
