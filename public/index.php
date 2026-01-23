<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once __DIR__ . '/../app/core/router.php';
    require_once __DIR__ . '/../app/controller/userController.php';
    require_once __DIR__ . '/../app/controller/authController.php';
    require_once __DIR__ . '/../app/controller/classController.php';
    require_once __DIR__ . '/../app/controller/teacherController.php';
    require_once __DIR__ . '/../app/controller/studentController.php';

    use App\Core\Router;
    use App\Controller\UserController;
    use App\Controller\AuthController;
    use App\Controller\ClassController;
    use App\Controller\TeacherController;
    use App\Controller\StudentController;

    $router = new Router();

    $router->add("GET" , "/" , [UserController::class , 'index']);
    $router->add("GET" , "/login" , [AuthController::class , 'showLogin']);
    $router->add("GET" , "/register" , [AuthController::class , 'showRegister']);
    $router->add("POST" , "/login" , [AuthController::class , 'login']);
    $router->add("POST" , "/register" , [AuthController::class , 'register']);
    $router->add("POST" , "/logout" , [AuthController::class , 'logout']);
    $router->add("GET" , "/teacher/dashboard" , [UserController::class , 'showTeacherDashboard']);
    $router->add("GET" , "/teacher/classes" , [ClassController::class , 'showTeacherClasses']);
    $router->add("GET" , "/teacher/classes/add" , [UserController::class , 'showTeacherAddClasses']);
    $router->add("GET" , "/teacher/classes/show" , [UserController::class , 'showOneClasse']);
    $router->add("GET" , "/teacher/classe/ajouteStudent" , [ClassController::class , 'showAjouteStudent']);
    $router->add("POST" , "/classes/add" , [ClassController::class , 'addNewClass']);
    $router->add("POST" , "/teacher/createStudent" , [TeacherController::class , 'ajouteNewStudent']);
    $router->add("GET" , "/student/dashboard" , [StudentController::class , 'showStudentDashboard']);
    $router->add("GET" , "/student/classes" , [StudentController::class , 'showStudentClasses']);
    $router->add("GET", "/student/dashboard", [StudentController::class, 'showStudentDashboard']);
    $router->add("GET", "/student/classes", [StudentController::class, 'showStudentClasses']);


    $router->dispatch();