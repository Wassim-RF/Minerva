<?php
namespace App\Models\Entities;

class Attendance {
    private int $id;
    private int $student_id;
    private int $class_id;
    private string $date;
    private bool $status;

    public function __construct(int $student_id = 0, int $class_id = 0, string $date = "", bool $status = false) {
        $this->student_id = $student_id;
        $this->class_id = $class_id;
        $this->date = $date;
        $this->status = $status;
    }

    public function getId(): int { return $this->id; }
    public function getStudentId(): int { return $this->student_id; }
    public function getClassId(): int { return $this->class_id; }
    public function getDate(): string { return $this->date; }
    public function getStatus(): bool { return $this->status; }

    public function setId(int $id): void { $this->id = $id; }
    public function setStudentId(int $student_id): void { $this->student_id = $student_id; }
    public function setClassId(int $class_id): void { $this->class_id = $class_id; }
    public function setDate(string $date): void { $this->date = $date; }
    public function setStatus(bool $status): void { $this->status = $status; }
}
?>