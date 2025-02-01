<?php

class App
{
    public function __construct()
    {
        $url = $this->parseURL();
        var_dump($url);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); # remove trailing slash (yang terakhir yaa)
            $url = filter_var($url, FILTER_SANITIZE_URL); # filter url (bersihkan URL dari karakter sembarang)
            $url = explode('/', $url);
            return $url;
        }
    }
}
