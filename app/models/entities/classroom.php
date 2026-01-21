<?php
    namespace App\Models\Entities;


    class ClassRoom {
        private int $id;
        private string $name;
        private int $teacher_id;

        public function __construct(string $name, int $teacher_id) {
            $this->setName($name);
            $this->setTeacherId($teacher_id);
        }

        public function getId() { return $this->id; }
        public function getName(){ return $this->name; }
        public function getTeacherId(){ return $this->teacher_id; }

        public function setId(int $id){ $this->id = $id; }
        public function setName(string $name){ $this->name = $name; }
        public function setTeacherId(int $teacher_id){ $this->teacher_id = $teacher_id; }
    }