<?php
    namespace App\Models\Entities;

    class ClasseStudent {
        private ?int $id = null;
        private int $class_id;
        private int $student_id;

        public function __construct(int $class_id, int $student_id) {
            $this->setClassId($class_id);
            $this->setStudentId($student_id);
        }
        public function getId(){ 
            return $this->id; 
        }

        public function getClassId(){
            return $this->class_id;
        }

        public function getStudentId(){
            return $this->student_id;
        }

        public function setId(?int $id){
            $this->id = $id;
        }

        public function setClassId(int $class_id){
            $this->class_id = $class_id;
        }

        public function setStudentId(int $student_id){
            $this->student_id = $student_id;
        }
    }