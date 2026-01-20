<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../repositories/userRepositories.php';

    use App\Models\Repositories\UserRepositories;

    class AuthServices {
        private UserRepositories $userRepositories;

        public function __construct(UserRepositories $userRepositories) {
            $this->userRepositories = $userRepositories;
        }

        public function login(string $email , string $password) {
            $student = $this->userRepositories->findUserByEmail($email);
            if (!$student) return null;

            if ($student) {
                if(password_verify($password , $student['password'])) {
                    if (session_status() === PHP_SESSION_NONE) {
                        session_start();
                    }
                    $_SESSION['student'] = [
                        'id' => $student['id'],
                        'name' => $student['name'],
                        'email' => $student['email']
                    ];
                }
            }
        }
    }