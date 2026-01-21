<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';
    require_once __DIR__ . '/../entities/teacher.php';

    use App\Core\DatabaseConnection;
    use App\Models\Entities\Teacher;
    use PDO;

    class UserRepositories {
        private PDO $pdo;

        public function __construct() {
            $this->pdo = DatabaseConnection::getInstance()->getConnection();
        }

        public function findUserByEmail(string $email) {
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$email]);
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function createTeacher(Teacher $teacher) {
            $sql = "INSERT INTO users (name , email , password , role) VALUES (:name , :email , :password , 'teacher')";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'name' => $teacher->getName(),
                'email' => $teacher->getEmail(),
                'password' => $teacher->getPassword()
            ]);
            $id = $this->pdo->lastInsertId();
            $teacher->setId($id);
            return $teacher;
        }

        public function lastInseredId() {
            $id = (int) $this->pdo->lastInsertId();
            return $id;
        }
    }