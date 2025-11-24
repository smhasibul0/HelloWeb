<?php

namespace App\Classes;

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'blog_db';
    protected $conn;


    public function __construct() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die('Connection Failed: ' . $this->conn->connect_error);
        }
    }
}