<?php
namespace App/Models/Entities

class ChatMessage {
    private int $id;
    private int $user_id;
    private int $class_id;
    private string $message;
    private string $sent_at;

    public function __construct(int $user_id = 0, int $class_id = 0, string $message = "", string $sent_at = "") {
        $this->user_id = $user_id;
        $this->class_id = $class_id;
        $this->message = $message;
        $this->sent_at = $sent_at;
    }

    public function getId(): int { return $this->id; }
    public function getUserId(): int { return $this->user_id; }
    public function getClassId(): int { return $this->class_id; }
    public function getMessage(): string { return $this->message; }
    public function getSentAt(): string { return $this->sent_at; }

    public function setId(int $id): void { $this->id = $id; }
    public function setUserId(int $user_id): void { $this->user_id = $user_id; }
    public function setClassId(int $class_id): void { $this->class_id = $class_id; }
    public function setMessage(string $message): void { $this->message = $message; }
    public function setSentAt(string $sent_at): void { $this->sent_at = $sent_at; }
}
?>