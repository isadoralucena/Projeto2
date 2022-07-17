<?php

use Projeto\Glau\App\Router;

$router = new Router;

//definir rotas da aplicação

$router->get('/', '/Views/homepage.php');


$router->get('/register', '/Views/auth/register.php');
$router->post('/register', '/Views/auth/register.php');

// $router->get('/user', '/Views/user.php', true);

// $router->post('/cadastro', '/Views/auth/createlivro.php', true);

$router->get('/login', '/Views/auth/login.php');
$router->post('/login', '/Views/auth/login.php');

$router->get('/dashboard', '/Views/dashboard.php', true);

//$router->post('/logout', '/Views/auth/auth.php', true);

return $router;