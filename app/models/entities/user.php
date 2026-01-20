<?php 
    namespace App\Models\Entities;

    class User{
        protected int $id;
        protected string $name;
        protected string $email;
        protected string $password;
        protected string $role; 


        public function __construct(string $name, string $email, string $password, string $role) {
            $this->setName($name);
            $this->setEmail($email);
            $this->setPassword($password);
            $this->setRole($role);
        }

        public function getId(){
            return $this->id;
        }

        public function getName(){
            return $this->name;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getRole(){
            return $this->role;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function setName(string $name) {
            $this->name = $name;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function setPassword(string $password){
            $this->password = $password;
        }

        public function setRole(string $role){
            $this->role = $role;
        }
    }