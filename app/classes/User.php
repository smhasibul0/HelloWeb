<?php

namespace App\Classes;

class User extends Database {
    public function login($email, $password) {
        return ($email === 'admin@example.com' && $password === '12345');
    }
}