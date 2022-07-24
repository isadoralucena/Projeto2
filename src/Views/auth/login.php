<?php

use Projeto\Glau\App\Application;
use Projeto\Glau\App\Http\AuthMiddleware;
use Projeto\Glau\Models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

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
<body class="logLogin">
    <style> 
    <?php include"css/style.css"?>
    </style>


    <div class="logLogin1">
        <h1>Login</h1>

        <div class="logLogin2">
                <div id="log">
                        <form action="/login" method="POST">
                        <input class="logLogin3" type="text" name="username" placeholder="Informe seu usuário">
                        <input class="logLogin3" type="password" name="password" placeholder="Informe sua senha">
                        <button class="button">Enviar</button>
                        <p></p>
                        <a href="/register">Registre-se</a>
                        </form>
                </div>
                

        </div>

        <div class="logLogin4">
             
            <form action="/" method="GET">
            <button class="button">Voltar</button>
             </form>    
        </div>
    </div>
    
   
</body>
</html>