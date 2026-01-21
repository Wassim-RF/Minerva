<?php
    namespace App\Models\Services;

    require_once __DIR__ . '/../repositories/teacherRepositories.php';
    require_once __DIR__ . '/../entities/student.php';
    require_once __DIR__ . '/../entities/classeStudent.php';

    use App\Models\Entities\Student;
    use App\Models\Entities\ClasseStudent;
    use App\Models\Repositories\TeacherRepositories;

    class TeacherServices {
        private TeacherRepositories $teacherRepositories;

        public function __construct(TeacherRepositories $teacherRepositories) {
            $this->teacherRepositories = $teacherRepositories;
        }
        
        public function createNewStudentAndToClass(string $name , string $email , string $password , int $class_id) {
            $student = new Student($name , $email , $password);
            $this->teacherRepositories->createNewStudent($student);
            $classStudent = new ClasseStudent(
                $class_id,
                $student->getId()
            );
            $this->teacherRepositories->addStudentToClass($classStudent);
        }
    }