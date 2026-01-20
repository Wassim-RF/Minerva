<?php
namespace App\Models\Entities;

class Submission {
    private int $id;
    private int $work_id;
    private int $student_id;
    private string $content;
    private ?string $file_path;
    private string $submitted_at;

    public function __construct(int $work_id, int $student_id, string $content, ?string $file_path, string $submitted_at ) {
        $this->work_id = $work_id;
        $this->student_id = $student_id;
        $this->content = $content;
        $this->file_path = $file_path;
        $this->submitted_at = $submitted_at;
    }

    public function getId(): int { return $this->id; }
    public function getWorkId(): int { return $this->work_id; }
    public function getStudentId(): int { return $this->student_id; }
    public function getContent(): string { return $this->content; }
    public function getFilePath(): ?string { return $this->file_path; }
    public function getSubmittedAt(): string { return $this->submitted_at; }

    public function setId(int $id): void { $this->id = $id; }
    public function setWorkId(int $work_id): void { $this->work_id = $work_id; }
    public function setStudentId(int $student_id): void { $this->student_id = $student_id; }
    public function setContent(string $content): void { $this->content = $content; }
    public function setFilePath(?string $file_path): void { $this->file_path = $file_path; }
    public function setSubmittedAt(string $submitted_at): void { $this->submitted_at = $submitted_at; }
}
?>