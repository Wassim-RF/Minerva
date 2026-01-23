<?php
namespace App\Controller;

require_once __DIR__ . '/../models/repositories/ClassRepositories.php';
require_once __DIR__ . '/../models/services/ClassServices.php';

use App\Models\Repositories\ClassRepositories;
use App\Models\Services\ClassServices;

class StudentController {

    private ClassServices $classServices;

    public function __construct() {
        $classRepo = new ClassRepositories();
        $this->classServices = new ClassServices($classRepo);
    }

    public function showStudentDashboard() {
        if ($_SESSION['user']['role'] === 'student') {
            require_once __DIR__ . '/../views/student/dashboard.php';
        }
    }

    public function showStudentClasses() {
        if ($_SESSION['user']['role'] === 'student') {

            $classes = $this->classServices
                ->getStudentClass($_SESSION['user']['id']);

            require_once __DIR__ . '/../views/student/class.php';
        }
    }
}
