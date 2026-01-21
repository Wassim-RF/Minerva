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

        public function register() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $name = $_POST['name_register--input'];
                $email = $_POST['email_register--input'];
                $password = $_POST['password_register--input'];
                $passwordConfirm = $_POST['password_register_confirm--input'];
                if ($password !== $passwordConfirm) {
                    $_SESSION['error'] = [
                        'password' => "Les mots de passes sont incoheront"
                    ];
                    header("Location: /register");
                    return null;
                }
                $password = password_hash($password , PASSWORD_DEFAULT);
                $this->authServices->register($name , $email , $password);
                header("Location: /home");
                exit();
            }
        }
    }