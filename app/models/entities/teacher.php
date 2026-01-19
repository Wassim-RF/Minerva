<?php
require_once "User.php";

class Teacher extends User {
    public function __construct(int $id = 0, string $name = "", string $email = "", string $password = "") {
        parent::__construct($id, $name, $email, $password, 'teacher');
    }
}
?>