<?php 
    namespace App\Controller;

    require_once __DIR__ . '/../models/repositories/userRepositories.php';
    require_once __DIR__ . '/../models/services/authServices.php';

    use App\Models\Repositories\UserRepositories;
    use App\Models\Services\AuthServices;

    class AuthController {
        private AuthServices $authServices;

        public function __construct() {
            $userRepo = new UserRepositories();
            $this->authServices = new AuthServices($userRepo);
        }

        public function showLogin() {
            include_once __DIR__ . '/../views/auth/login.php';
        }
        public function showRegister() {
            include_once __DIR__ . '/../views/auth/register.php';
        }

        public function login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email_input = $_POST['email_login--input'];
                $password_input = $_POST['password_login--input'];
                $student = $this->authServices->login($email_input , $password_input);
                if ($student !== null) {
                    header("Location: /home");
                    exit();
                }
            }
        }
    }