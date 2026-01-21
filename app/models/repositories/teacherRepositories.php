<?php
    namespace App\Models\Repositories;

    require_once __DIR__ . '/../../core/database.php';
    require_once __DIR__ . '/../entities/student.php';
    require_once __DIR__ . '/../entities/classeStudent.php';

    use App\Models\Entities\ClasseStudent;
    use App\Models\Entities\Student;
    use App\Core\DatabaseConnection;
    use PDO;

    class TeacherRepositories {
        private PDO $pdo;

        public function __construct() {
            $this->pdo = DatabaseConnection::getInstance()->getConnection();
        }

        public function createNewStudent(Student $student) {
            $sql = "INSERT INTO users (name , email , password , role) VALUES (:name , :email , :password , 'student')";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'name' => $student->getName(),
                'email' => $student->getEmail(),
                'password' => $student->getPassword()
            ]);
            $id = $this->pdo->lastInsertId();
            $student->setId($id);
            return $student;
        }

        public function addStudentToClass(ClasseStudent $classeStudent) {
            $sql = "INSERT INTO class_students (class_id , student_id) VALUES (:class_id , :student_id)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                'class_id' => $classeStudent->getClassId(),
                'student_id' => $classeStudent->getStudentId()
            ]);
            $id = $this->pdo->lastInsertId();
            $classeStudent->setId($id);
            return $classeStudent;
        }
    }