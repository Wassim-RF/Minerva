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
    }