<?php

use Projeto\Glau\Models\Curso;
use Projeto\Glau\Models\Livro;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //SALVAR LIVRO E REDIRECIONAR PARA DASHBOARD
    if (!empty($_POST['titulo']) && !empty($_POST['autor'])) {//se existir algo nos inputs (não estiverem vázios)
        $livro = new Livro($_POST['titulo'], $_POST['autor']);//$livro recebe instância de Livro, inicializando seus valores
        $livro->save();    
        header("Location: /dashboardLivroCurso", true, 302);
        exit;
    }
    //SALVAR CURSO E REDIRECIONAR PARA DASHBOARD
    if (!empty($_POST['nome']) && !empty($_POST['tipoDeCurso']) && !empty($_POST['cargaHoraria'])) {//se existir algo nos inputs (não estiverem vázios)
        $curso = new Curso($_POST['nome'], $_POST['tipoDeCurso'], $_POST['cargaHoraria']);//$user recebe instância de User, inicializando seus valores
        $curso->save();
        header("Location: /dashboardLivroCurso", true, 302);
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre</title>
    <style>
    <?php include"css/style.css"?>
    </style>
</head>
<body class="logLogin">
    
        
        <div class="user_information color1 font1">
            <h1>Usuário: <?php echo $_SESSION['user']?></h1>
        </div>
        <div class='container_user_register color1 font1'>

        <div class='user_register user_register1 '>
            <center>
            <h1>Registro de livros</h1>
                <div class='user_register_center shadow'>
                    
                    <form action="/registerLivroCurso" method="POST">
                        <input type="text" name="titulo" placeholder="Informe o título" class='user_register_input element_top'>
                        <input type="text" name="autor" placeholder="Informe o autor" class='user_register_input'>
                        <button class='user_register_send_button color1 font1'>Enviar</button>
                    </form>  
                    
                </div> 
            </center>
        </div>

        <div class='user_register user_register2'>
            <center>
            <h1>Registro de cursos</h1>
                <div class='user_register_center shadow'>
                    
                    <form action="/registerLivroCurso" method="POST">
                        <input type="text" name="nome" placeholder="Informe o nome" class='user_register_input element_top'>
                        <input type="text" name="tipoDeCurso" placeholder="Informe o tipo de curso" class='user_register_input'>
                        <input type="number" min="0" step="any" name="cargaHoraria" placeholder="Informe a carga horária" class='user_register_input'>
                        <button class='user_register_send_button color1 font1'>Enviar</button>
                    </form> 
                    
                </div> 
            </center>
        </div> 

        <label class="label_for_user_register">
            <center>
                <form action="/dashboard" method="GET">
                    <button class='user_back_button color1 font1 shadow'>Voltar</button>
                </form>
            </center>
        </label>
    <div>
</body>
</html>