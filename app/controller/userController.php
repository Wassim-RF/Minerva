<?php
    namespace App\Controller;

    require_once __DIR__ . '/../models/repositories/classReposeteries.php';
    require_once __DIR__ . '/../models/services/classServices.php';

    use App\Models\Repositories\ClassRepositories;
    use App\Models\Services\ClassServices;

    class UserController{

    private ClassServices $classServices;

        public function __construct() {
            $classRepo = new ClassRepositories();
            $this->classServices = new ClassServices($classRepo);
        }

        public function index() {
            header("Location: /login");
            exit();
        }

        public function showTeacherDashboard() {
            $uri = $_SERVER['REQUEST_URI'];
            unset($_SESSION['class']);
            $classNum = $this->classServices->classNumberByTeacherId((int) $_SESSION['user']['id']);

            require_once __DIR__ . '/../views/teacher/dashboard.php';
        }

        public function showTeacherAddClasses() {
            $uri = $_SERVER['REQUEST_URI'];
            require_once __DIR__ . '/../views/teacher/ajouteClasse.php';
        }

        public function showOneClasse() {
            $_SESSION['class']['id'] = $_GET['id'];
            require_once __DIR__ . '/../views/teacher/showClasse.php';
        }
    }
