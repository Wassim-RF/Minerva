<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';

    use App\Core\DatabaseConnection;
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
    }