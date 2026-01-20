<?php
namespace App\Models\Entities;

require_once "User.php";

use App\Models\Entities\User;

class Teacher extends User {
    public function __construct(int $id, string $name, string $email, string $password) {
        parent::__construct($id, $name, $email, $password, 'teacher');
    }
}
?>