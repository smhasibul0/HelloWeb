<?php

namespace App\Classes;

class Post extends Database {
    public function getAllPosts() {
        $sql = "SELECT * FROM posts ORDER BY id DESC";
        return $this->conn->query($sql);
    }
}