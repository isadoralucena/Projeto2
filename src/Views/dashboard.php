<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body class="logLogin">
    <style>
    <?php include"css/style.css"?>
    </style>


    <h1>Ok, você está logado, <?php echo $_SESSION['user']?></h1>
    <h1>Escolha o que fazer agora: </h1>
    <form action="/registerLivroCurso" method="POST">
        <button>Cadastrar livro</button>
    </form>
    <form action="/registerLivroCurso" method="POST">
        <button>Cadastrar curso</button>
    </form>
    <form action="/dashboardLivroCurso" method="GET">
        <button>Visualizar cadastros</button>
    </form>

    <form action="/logout" method="POST">
        <button>Logout</button>
    </form>
    <form action="/login" method="GET">
        <button>Voltar</button>
    </form>
</body>
</html>