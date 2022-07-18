<?php

use Projeto\Glau\Models\Curso;
use Projeto\Glau\Models\Livro;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //SALVAR LIVRO E REDIRECIONAR PARA DASHBOARD
    if (isset($_POST['titulo'], $_POST['autor'])) {//se existir algo nos inputs (não estiverem vázios)
        $livro = new Livro($_POST['titulo'], $_POST['autor']);//$livro recebe instância de Livro, inicializando seus valores
        $livro->save();    
        header("Location: /dashboardLivroCurso", true, 302);
        exit;
    }
    //SALVAR CURSO E REDIRECIONAR PARA DASHBOARD
    if (isset($_POST['nome'], $_POST['tipoDeCurso'], $_POST['cargaHoraria'])) {//se existir algo nos inputs (não estiverem vázios)
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
</head>
<body>
    <h1>Registro de livros</h1>
    <form action="/registerLivroCurso" method="POST">
        <input type="text" name="titulo" placeholder="Informe o título">
        <input type="text" name="autor" placeholder="Informe o autor">
        <button>Enviar</button>
    </form>   
    <h1>Registro de cursos</h1>
    <form action="/registerLivroCurso" method="POST">
        <input type="text" name="nome" placeholder="Informe o nome">
        <input type="text" name="tipoDeCurso" placeholder="Informe o tipo de curso">
        <input type="number" min="0" step="any" name="cargaHoraria" placeholder="Informe a carga horária">
        <button>Enviar</button>
    </form>   
    <form action="/dashboard" method="GET">
        <button>Voltar</button>
    </form>
</body>
</html>