<?php
    namespace App\Controller;

    require_once __DIR__ . '/../models/repositories/classReposeteries.php';
    require_once __DIR__ . '/../models/services/classServices.php';

    use App\Models\Repositories\ClassRepositories;
    use App\Models\Services\ClassServices;

    class ClassController {
        private ClassServices $classServices;

        public function __construct() {
            $classRepo = new ClassRepositories();
            $this->classServices = new ClassServices($classRepo);
        }

        public function addNewClass() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['class_name--input'];
                $this->classServices->createClass($name , $_SESSION['user']['id']);
                header("Location: /teacher/classes");
                exit();
            }
        }

        public function showTeacherClasses() {
            $uri = $_SERVER['REQUEST_URI'];
            $classes = $this->classServices->showClassByTeacher((int) $_SESSION['user']['id']);
            require_once __DIR__ . '/../views/teacher/class.php';
        }
    }