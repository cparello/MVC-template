<?php

/*
 *PDO
 */

class Database
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $password = DB_PASS;
    private $db = DB_NAME;

    private $dbh;
    private $stmt;
    private $error;

    public function __construct()
    {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {

            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);

        } catch (PDOException $e) {

            $this->error = $e->getMessage();
            echo $this->error;
        }
    }
}
