<?php
namespace App\Models\Entities;
require_once "User.php";
use App\Models\Entities\User;

class Student extends User {
    private int $class_id;

    public function __construct(string $name = "", string $email = "", string $password = "", int $class_id = 0) {
        parent::__construct($id, $name, $email, $password, 'student');
        $this->class_id = $class_id;
    }

    public function getClassId(): int { return $this->class_id; }
    public function setClassId(int $class_id): void { $this->class_id = $class_id; }
}
?>