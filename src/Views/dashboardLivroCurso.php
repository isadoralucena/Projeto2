<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body class="logLogin">
    <style>
    <?php include"css/style.css"?>
    </style>


    <h1>Livros cadastrados</h1>
    <?php
    use Projeto\Glau\Models\Livro;

    Livro::display();
    ?>

    <h1>Cursos cadastrados</h1>
    <?php
    use Projeto\Glau\Models\Curso;

    Curso::display();

    ?>

    <form action="/logout" method="POST">
        <button>Logout</button>
    </form>
    
    <form action="/dashboard" method="GET">
        <button>Voltar</button>
    </form>

    <form action="/registerLivroCurso" method="POST">
        <button>Registre mais</button>
    </form>

</body>
</html>