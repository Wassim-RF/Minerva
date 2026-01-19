<?php
namespace App/Models/Entities

class Grade {
    private int $id;
    private int $submission_id;
    private float $score;
    private string $comment;

    public function __construct(int $submission_id = 0, float $score = 0, string $comment = "") {
        $this->submission_id = $submission_id;
        $this->score = $score;
        $this->comment = $comment;
    }

    public function getId(): int { return $this->id; }
    public function getSubmissionId(): int { return $this->submission_id; }
    public function getScore(): float { return $this->score; }
    public function getComment(): string { return $this->comment; }

    public function setId(int $id): void { $this->id = $id; }
    public function setSubmissionId(int $submission_id): void { $this->submission_id = $submission_id; }
    public function setScore(float $score): void { $this->score = $score; }
    public function setComment(string $comment): void { $this->comment = $comment; }
}
?>