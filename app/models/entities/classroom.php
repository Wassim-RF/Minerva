<?php
namespace App\Models\Entities;


class ClassRoom {
    private int $id;
    private string $name;
    private int $teacher_id;

    public function __construct(string $name = "", int $teacher_id = 0) {
        $this->name = $name;
        $this->teacher_id = $teacher_id;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getTeacherId(): int { return $this->teacher_id; }

    public function setId(int $id): void { $this->id = $id; }
    public function setName(string $name): void { $this->name = $name; }
    public function setTeacherId(int $teacher_id): void { $this->teacher_id = $teacher_id; }
}
?>