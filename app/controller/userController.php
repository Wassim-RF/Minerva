<?php
    namespace App\Controller;

    class UserController{
        public function index() {
            header("Location: /login");
            exit();
        }

        public function showTeacherDashboard() {
            require_once __DIR__ . '/../views/teacher/dashboard.php';
        }
        
    }
