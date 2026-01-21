<?php
    namespace App\Models\Entities;

    class Work {
        private int $id;
        private string $title;
        private string $description;
        private ?string $file_path = null;
        private int $class_id;

        public function __construct(string $title, string $description, ?string $file_path, int $class_id) {
            $this->setTitle($title);
            $this->setDescription($description);
            $this->setFilePath($file_path);
            $this->setClassId($class_id);
        }

        public function getId(){ return $this->id; }
        public function getTitle(){ return $this->title; }
        public function getDescription(){ return $this->description; }
        public function getFilePath(){ return $this->file_path; }
        public function getClassId(){ return $this->class_id; }

        public function setId(int $id){ $this->id = $id; }
        public function setTitle(string $title){ $this->title = $title; }
        public function setDescription(string $description){ $this->description = $description; }
        public function setFilePath(?string $file_path){ $this->file_path = $file_path; }
        public function setClassId(int $class_id){ $this->class_id = $class_id; }
    }