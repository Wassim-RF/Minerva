<?php
    namespace App\Models\Entities;

    class Attendance {
        private int $id;
        private int $student_id;
        private int $class_id;
        private string $date;
        private string $status;

        public function __construct(int $student_id, int $class_id, string $date, string $status) {
            $this->setStudentId($student_id);
            $this->setClassId($class_id);
            $this->setDate($date);
            $this->setStatus($status);
        }

        public function getId(){ return $this->id; }
        public function getStudentId(){ return $this->student_id; }
        public function getClassId(){ return $this->class_id; }
        public function getDate(){ return $this->date; }
        public function getStatus(){ return $this->status; }

        public function setId(int $id){ $this->id = $id; }
        public function setStudentId(int $student_id){ $this->student_id = $student_id; }
        public function setClassId(int $class_id){ $this->class_id = $class_id; }
        public function setDate(string $date){ $this->date = $date; }
        public function setStatus(string $status){ $this->status = $status; }
    }