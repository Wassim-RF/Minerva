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
    }