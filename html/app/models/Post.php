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

    public function getPosts()
    {
        $this->db->query("SELECT * FROM posts");

        return $this->db->resultSet();
    }
}
