<?php
    namespace App\Controller;

    require_once __DIR__ . '/../models/repositories/teacherRepositories.php';
    require_once __DIR__ . '/../models/services/teacherServices.php';
    require_once __DIR__ . '/../models/services/emailServices.php';

    use App\Models\Repositories\TeacherRepositories;
    use App\Models\Services\TeacherServices;
    use App\Models\Services\EmailServices;

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
                $hashPassword = password_hash($password , PASSWORD_DEFAULT);

                $emailServices = new EmailServices();
                $emailServices->send($email , $password);

                $this->teacherServices->createNewStudentAndToClass($name , $email , $hashPassword , $_SESSION['class']['id']);
                header("Location: /teacher/classes/show?id={$_SESSION['class']['id']}");
                exit();
            }
        }
    }