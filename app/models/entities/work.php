<?php
namespace App\Models\Entities;

class Work {
    private int $id;
    private string $title;
    private string $description;
    private ?string $file_path;
    private int $class_id;

    public function __construct(string $title, string $description = "", ?string $file_path = null, int $class_id = 0) {
        $this->title = $title;
        $this->description = $description;
        $this->file_path = $file_path;
        $this->class_id = $class_id;
    }

    public function getId(): int { return $this->id; }
    public function getTitle(): string { return $this->title; }
    public function getDescription(): string { return $this->description; }
    public function getFilePath(): ?string { return $this->file_path; }
    public function getClassId(): int { return $this->class_id; }

    public function setId(int $id): void { $this->id = $id; }
    public function setTitle(string $title): void { $this->title = $title; }
    public function setDescription(string $description): void { $this->description = $description; }
    public function setFilePath(?string $file_path): void { $this->file_path = $file_path; }
    public function setClassId(int $class_id): void { $this->class_id = $class_id; }
}
?>