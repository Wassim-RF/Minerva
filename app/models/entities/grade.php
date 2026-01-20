<?php
    namespace App\Models\Entities;

    class Grade {
        private int $id;
        private int $submission_id;
        private float $score;
        private string $comment;

        public function __construct(int $submission_id, float $score, string $comment) {
            $this->setSubmissionId($submission_id);
            $this->setScore($score);
            $this->setComment($comment);
        }

        public function getId(){ return $this->id; }
        public function getSubmissionId(){ return $this->submission_id; }
        public function getScore(){ return $this->score; }
        public function getComment(){ return $this->comment; }

        public function setId(int $id){ $this->id = $id; }
        public function setSubmissionId(int $submission_id){ $this->submission_id = $submission_id; }
        public function setScore(float $score){ $this->score = $score; }
        public function setComment(string $comment){ $this->comment = $comment; }
    }