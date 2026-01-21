<?php
    namespace App\Controller;

    class UserController{
        public function index() {
            header("Location: /login");
            exit();
        }

        public function showTeacherDashboard() {
            $uri = $_SERVER['REQUEST_URI'];
            require_once __DIR__ . '/../views/teacher/dashboard.php';
        }
        
    }
