<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../repositories/userRepositories.php';

    use App\Models\Entities\Teacher;
    use App\Models\Repositories\UserRepositories;

    class AuthServices {
        private UserRepositories $userRepositories;

        public function __construct(UserRepositories $userRepositories) {
            $this->userRepositories = $userRepositories;
        }

        public function login(string $email , string $password) {
            $user = $this->userRepositories->findUserByEmail($email);
            if (!$user) {
                $_SESSION['error'] = [
                    'email' => "Email n'existe pas"
                ];
                header("Location: /login");
                return null;
            };

            if ($user) {
                if(password_verify($password , $user['password'])) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'name' => $user['name'],
                        'email' => $user['email'],
                        'role' => $user['role']
                    ];
                } else {
                    $_SESSION['error'] = [
                        'password' => "Password est incorect"
                    ];
                }
            }
        }

        public function register(string $name , string $email , string $password) {
            $user = $this->userRepositories->findUserByEmail($email);
            if ($user) {
                $_SESSION['error'] = [
                    'email' => "Email existant"
                ];
                header("Location: /register");
                return null;
            };

            $user = new Teacher($name , $email , $password);

            $this->userRepositories->createTeacher($user);
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION['user'] = [
                'id' => $this->userRepositories->lastInseredId(),
                'name' => $name,
                'email' => $email,
                'role' => "teacher"
            ];
        }
    }