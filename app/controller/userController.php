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
        
        public function showTeacherClasses() {
            $uri = $_SERVER['REQUEST_URI'];
            require_once __DIR__ . '/../views/teacher/class.php';
        }
        public function showTeacherAddClasses() {
            $uri = $_SERVER['REQUEST_URI'];
            require_once __DIR__ . '/../views/teacher/ajouteClasse.php';
        }

        public function showOneClasse() {
            require_once __DIR__ . '/../views/teacher/showClasse.php';
        }
    }
