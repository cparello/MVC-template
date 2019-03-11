<?php

/*
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/params
 */

class Core
{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        // print_r($this->getUrl());

        $url = $this->getUrl();

        //find controller
        if (file_exists('/var/www/html/app/controllers/' . ucwords($url[0]) . '.php')) {
            //set controller
            $this->currentController = ucwords($url[0]);
            // unset 0 index
            unset($url[0]);
        }

        //require controller
        require_once '/var/www/html/app/controllers/' . $this->currentController . '.php';
        //instantiate controller
        $this->currentController = new $this->currentController;

        //check for method in class
        if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            // unset 1 index
            unset($url[1]);
        }

        //get params
        $this->params = $url ? array_values($url) : [];

        //call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        }
    }
}
  
