<?php

use Projeto\Glau\App\Router;

$router = new Router;

//definir rotas da aplicação

$router->get('/', '/Views/homepage.php');

$router->get('/register', '/Views/auth/register.php');
$router->post('/register', '/Views/auth/register.php');

$router->get('/login', '/Views/auth/login.php');
$router->post('/login', '/Views/auth/login.php');

$router->post('/logout', '/Views/auth/auth.php', true);

// $router->get('/user', '/Views/user.php', true);

// $router->post('/cadastro', '/Views/auth/createlivro.php', true);

$router->get('/registerLivroCurso', '/Views/auth/registerLivroCurso.php', true);
$router->post('/registerLivroCurso', '/Views/auth/registerLivroCurso.php', true);

$router->get('/dashboard', '/Views/dashboard.php', true);
$router->get('/dashboardLivroCurso', '/Views/dashboardLivroCurso.php', true);

return $router;
?>