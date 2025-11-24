<?php

namespace App\Classes;

class Category extends Database {
    public function getCategories() {
        return $this->conn->query("SELECT * FROM categories");
    }
}