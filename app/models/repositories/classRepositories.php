<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';
    require_once __DIR__ . '/../entities/classroom.php';

    use App\Core\DatabaseConnection;
    use App\Models\Entities\ClassRoom;
    use PDO;

    class ClassRepositories {
        private PDO $pdo;

        public function __construct() {
            $this->pdo = DatabaseConnection::getInstance()->getConnection();
        }

        public function createClass(ClassRoom $classRoom) {
            $sql = "INSERT INTO classes (name , teacher_id) VALUES (:name , :teacher_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'name' => $classRoom->getName(),
                'teacher_id' => $classRoom->getTeacherId()
            ]);
            $id = $this->pdo->lastInsertId();
            $classRoom->setId($id);
            return $classRoom;
        }

        public function showClassByTeacherId(int $teacher_id) {
            $sql = "SELECT * FROM classes WHERE teacher_id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$teacher_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function classNumberByTeacherId(int $teacher_id) {
            $sql = "SELECT COUNT(*) FROM classes WHERE teacher_id = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$teacher_id]);
            return $stmt->fetchColumn();
        }

        public function getClassMembersByStudent(int $studentId): array
{
    $stmt = $this->db->prepare("
        SELECT c.name AS class_name, u.name, u.email
        FROM classroom c
        JOIN classeStudent cs ON cs.class_id = c.id
        JOIN users u ON u.id = cs.student_id
        WHERE cs.student_id = :studentId
    ");

    $stmt->execute(['studentId' => $studentId]);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
}
    }