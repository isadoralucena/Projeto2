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
<body class="logLogin">
    
    <div class="user_information font1 color1">
        <h1>Usuário: <?php echo $_SESSION['user']?></h1>
    </div>
    <div class="user_container_registered">

        <div class="user_registered color1 font1">
            <h1>Livros cadastrados</h1>
            <div class="user_registered_space">
                <?php
                use Projeto\Glau\Models\Livro;

                Livro::display();
                ?>
            </div>
        </div>

        <div class="user_registered font1 color1">
            <h1>Cursos cadastrados</h1>
            <div class="user_registered_space">
                <?php
                use Projeto\Glau\Models\Curso;

                Curso::display();

                ?>
            </div>
        </div>
        
        <form action="/dashboard" method="GET">
            <button class='user_back_button button_space color1 shadow'>Voltar</button>
        </form>
    </div>

</body>
</html>