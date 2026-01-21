<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    require_once __DIR__ . '/../app/core/router.php';
    require_once __DIR__ . '/../app/controller/userController.php';
    require_once __DIR__ . '/../app/controller/authController.php';

    use App\Core\Router;
    use App\Controller\UserController;
    use App\Controller\AuthController;

    $router = new Router();

    $router->add("GET" , "/" , [UserController::class , 'index']);
    $router->add("GET" , "/login" , [AuthController::class , 'showLogin']);
    $router->add("GET" , "/register" , [AuthController::class , 'showRegister']);
    $router->add("POST" , "/login" , [AuthController::class , 'login']);

    $router->dispatch();