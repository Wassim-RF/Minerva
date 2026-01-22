<?php  
    namespace App\Controller;

    class StudentController {
        public function showStudentDashboard() {
            if ($_SESSION['user']['role'] === 'student') {
                $uri = $_SERVER['REQUEST_URI'];
                require_once __DIR__ . '/../views/student/dashboard.php';
            }
        }

        public function showStudentClasses() {
            if ($_SESSION['user']['role'] === 'student') {
                $uri = $_SERVER['REQUEST_URI'];
                require_once __DIR__ . '/../views/student/class.php';
            }
        }

        public function getClassMembersByStudent(int $studentId): array
        {
        $stmt = $this->db->prepare("
        SELECT c.name AS class_name, u.name, u.email, u.role
        FROM classroom c
        JOIN classeStudent cs ON cs.class_id = c.id
        JOIN users u ON u.id = cs.student_id
        WHERE cs.class_id = (
            SELECT class_id FROM classeStudent WHERE student_id = :studentId
        )
        ");
        $stmt->execute(['studentId' => $studentId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    }

    