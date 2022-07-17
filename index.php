<?php

require __DIR__ . '/vendor/autoload.php';

use Projeto\Glau\App\Application;

//carregando as rotas da aplicação
$router = require_once __DIR__ . '/web.php';

//criando conexao e tabelas no banco
// require_once __DIR__ . '/database.php';

$app = new Application($router);

//recebe requisição e retorna página
$app->send();