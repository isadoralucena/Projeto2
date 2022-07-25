<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
    <?php include"css/style.css"?>
    </style>
</head>
<body class="body_user_page">

    <div class="user_information color1 font1">
        <h1>Bem vindo, <?php echo $_SESSION['user']?></h1>
    </div>

    <div class="user_mid color1 font1">
        <center>
            <h1>Escolha o que fazer agora: </h1>
        
        <center>
            <div class="user_mid_center shadow">
                <form action="/registerLivroCurso" method="POST">
                    <button class='user_buttons color1 font1'>Cadastrar livro</button>
                </form>
                <form action="/registerLivroCurso" method="POST">
                    <button class='user_buttons color1 font1'>Cadastrar curso</button>
                </form>
                <form action="/dashboardLivroCurso" method="GET">
                    <button class='user_buttons color1 font1'>Visualizar cadastros</button>
                </form>

                <form action="/logout" method="POST">
                    <button class='user_buttons user_logout color1 font1'>Logout</button>
                </form>
            </div>
        <center>
    </div>
</body>
</html>