<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../repositories/classReposeteries.php';
    require_once __DIR__ . '/../entities/classroom.php';

    use App\Models\Entities\ClassRoom;
    use App\Models\Repositories\ClassRepositories;

    class ClassServices {
        private ClassRepositories $classRepositories;

        public function __construct(ClassRepositories $classRepositories) {
            $this->classRepositories = $classRepositories;
        }

        public function createClass(string $name , int $teacher_id) {
            $class = new ClassRoom($name , $teacher_id);
            $this->classRepositories->createClass($class);
        }
    }