<?php

use Projeto\Glau\Models\User;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //SALVAR USUÁRIO E REDIRECIONAR PARA DASHBOARD
    if (!empty($_POST['username']) && !empty($_POST['password'])) {//se existir algo nos inputs (não estiverem vázios)

        $user = new User($_POST['username'], $_POST['password']);//$user recebe instância de User, inicializando seus valores
        //para não existir users iguais
        if (!User::exists($_POST['username'], $_POST['password'])) {
            $user->save();

            //registra sessão do usuário
            session_start();
            $_SESSION['user']= $_POST['username'];
            $_SESSION['id']= session_id() . $_POST['username'];
            header("Location: /dashboard", true, 302);
            exit;
        } else {
            header("Location: /login", true, 302);//se já existe o user, ele faz login
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

    <title>Cadastre-se</title>
</head>
<body class="logLogin">
    <style>
    <?php include"css/style.css"?>
    </style>

    <div class="regis color1 font1 ">
    <h1>Registro de usuários</h1>

        <div class="regis1 font1 shadow">
            <div class="regis2">
                <form action="/register" method="POST">
                    <input class="logLogin3" type="text" name="username" placeholder="Digite seu usuário">
                    <p></p>
                    <input class="logLogin3" type="password" id="senha"  name="password" placeholder="Digite sua senha">
                    <p></p> 
                    <button class="button color1">Enviar</button>
                </form>   
                <a class='color1' href="/login">Já tem uma conta?</a>
            </div>
          
        </div>
        
        <div class="logLogin4">
            <form action="/login" method="GET">
                <button class="button color1 shadow">Voltar</button>
                </form>
        </div>

        
       

    </div>

</body>
</html>