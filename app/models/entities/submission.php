<?php
    namespace App\Models\Entities;

    class Submission {
        private int $id;
        private int $work_id;
        private int $student_id;
        private string $content;
        private ?string $file_path = null;
        private string $submitted_at;

        public function __construct(int $work_id, int $student_id, string $content, ?string $file_path, string $submitted_at ) {
            $this->setWorkId($work_id);
            $this->setStudentId($student_id);
            $this->setContent($content);
            $this->setFilePath($file_path);
            $this->setSubmittedAt($submitted_at);
        }

        public function getId(){ return $this->id; }
        public function getWorkId(){ return $this->work_id; }
        public function getStudentId(){ return $this->student_id; }
        public function getContent(){ return $this->content; }
        public function getFilePath(){ return $this->file_path; }
        public function getSubmittedAt(){ return $this->submitted_at; }

        public function setId(int $id){ $this->id = $id; }
        public function setWorkId(int $work_id){ $this->work_id = $work_id; }
        public function setStudentId(int $student_id){ $this->student_id = $student_id; }
        public function setContent(string $content){ $this->content = $content; }
        public function setFilePath(?string $file_path){ $this->file_path = $file_path; }
        public function setSubmittedAt(string $submitted_at){ $this->submitted_at = $submitted_at; }
    }