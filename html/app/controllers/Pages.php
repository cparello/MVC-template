<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 3/10/2019
 * Time: 3:17 PM
 */

class Pages extends Controller
{
    public function __construct()
    {
//        echo "pages loaded";
        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $data = ['title' => 'INDEX'];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = ['title' => 'ABOUT'];
        $this->view('pages/about', $data);
    }

}
