<?php
    namespace App\Controller;

    require_once __DIR__ . '/../models/repositories/teacherRepositories.php';
    require_once __DIR__ . '/../models/services/teacherServices.php';

    use App\Models\Repositories\TeacherRepositories;
    use App\Models\Services\TeacherServices;
    class TeacherController {
        private TeacherServices $teacherServices;

        public function __construct() {
            $teacherRepo = new TeacherRepositories();
            $this->teacherServices = new TeacherServices($teacherRepo);
        }

        public function ajouteNewStudent() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name  = $_POST['name'];
                $email = $_POST['email'];
                $password = substr(md5(rand()), 0, 8);
                $password = password_hash($password , PASSWORD_DEFAULT);

                $this->teacherServices->createNewStudentAndToClass($name , $email , $password , $_SESSION['class']['id']);
                header("Location: /teacher/classes/show?id={$_SESSION['class']['id']}");
                exit();
            }
        }
    }