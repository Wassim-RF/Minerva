<?php
    namespace App\Models\Entities;

    class ChatMessage {
        private int $id;
        private int $user_id;
        private int $class_id;
        private string $message;
        private string $sent_at;

        public function __construct(int $user_id, int $class_id, string $message, string $sent_at) {
            $this->setUserId($user_id);
            $this->setClassId($class_id);
            $this->setMessage($message);
            $this->setSentAt($sent_at);
        }

        public function getId(){ return $this->id; }
        public function getUserId(){ return $this->user_id; }
        public function getClassId(){ return $this->class_id; }
        public function getMessage(){ return $this->message; }
        public function getSentAt(){ return $this->sent_at; }

        public function setId(int $id){ $this->id = $id; }
        public function setUserId(int $user_id){ $this->user_id = $user_id; }
        public function setClassId(int $class_id){ $this->class_id = $class_id; }
        public function setMessage(string $message){ $this->message = $message; }
        public function setSentAt(string $sent_at){ $this->sent_at = $sent_at; }
    }