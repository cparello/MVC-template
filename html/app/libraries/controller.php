<?php

/*
 * Base Controller
 * loads models and views
 */

class Controller
{

    //load model
    public function model($model)
    {
        //require model
        require_once '/var/www/html/app/models/' . $model . '.php';

        //instantiate model
        return new $model();
    }

    //load view
    public function view($view, $data)
    {
        if (file_exists('/var/www/html/app/views/' . $view . '.php')) {
            require_once '/var/www/html/app/views/' . $view . '.php';
        } else {
            die('View does not exist');
        }
    }

}
