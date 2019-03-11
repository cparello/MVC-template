<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 3/10/2019
 * Time: 10:03 PM
 */

class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}
