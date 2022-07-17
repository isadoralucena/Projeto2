<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <h1>Livros cadastrados</h1>
    <?php
    $banco = new SQLite3 (__DIR__ . '/../../banco.db');
    $dados = $banco -> query("SELECT * FROM livros");
    while(($linha = $dados->fetchArray())){   
        echo "<ul>
                  <li>Título: " .$linha['titulo'].", autor: ".$linha['autor']."</li>
              </ul>";
    }
    ?>

    <h1>Cursos cadastrados</h1>
    <?php
    $dados = $banco -> query("SELECT * FROM cursos");
    while(($linha = $dados->fetchArray())){   
        echo "<ul>
                  <li>Nome: ".$linha['nome'].", tipo de curso: ".$linha['tipoDeCurso'].", carga horária: ".$linha['cargaHoraria']."</li>
              </ul>";
    }
    ?>
    <form action="/logout" method="POST">
        <button>Logout</button>
    </form>

</body>
</html>