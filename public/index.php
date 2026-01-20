<?php
    require_once __DIR__ . '/../app/core/router.php';
    require_once __DIR__ . '/../app/controller/userController.php';

    use App\Core\Router;
    use App\Controller\UserController;

    $router = new Router();

    $router->add("GET" , "/" , [UserController::class , 'index']);

    $router->dispatch();