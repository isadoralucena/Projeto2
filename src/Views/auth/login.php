<?php

use Projeto\Glau\App\Application;
use Projeto\Glau\App\Http\AuthMiddleware;
use Projeto\Glau\Models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['username'], $_POST['password'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (User::exists($username, $password)) {
            //iniciar sessão
            session_start();
            $_SESSION['user'] = $username;
            $_SESSION['id'] = session_id() . $username;
            header("Location: /dashboard");
            exit;
        } else {
            header("Location: /register", 302);
            exit;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form action="/login" method="POST">
        <input type="text" name="username" placeholder="Informe seu usuário">
        <input type="password" name="password" placeholder="Informe sua senha">
        <button>Enviar</button>
    </form>

    <a href="/register">Registre-se</a>
    <form action="/" method="GET">
        <button>Voltar</button>
    </form>
</body>
</html>