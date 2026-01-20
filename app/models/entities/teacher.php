<?php
    namespace App\Models\Entities;

    require_once "User.php";

    use App\Models\Entities\User;

    class Teacher extends User {
        public function __construct(string $name, string $email, string $password) {
            parent::__construct($name, $email, $password, 'teacher');
        }
    }