<?php 

namespace Projeto\Glau\Models;

class Curso extends Model {

    protected $nome;
    protected $tipoDeCurso;
    protected $cargaHoraria;

    public function __construct($nome, $tipoDeCurso, $cargaHoraria)
    {
        $this->nome = $nome;
        $this->tipoDeCurso = $tipoDeCurso;
        $this->cargaHoraria = $cargaHoraria;
    }

    public function save() {
        $statement = self::$conexao->prepare("INSERT INTO cursos(nome, tipoDeCurso, cargaHoraria) VALUES (:n, :t, :c)");
        $statement->bindValue(':n', $this->nome, SQLITE3_TEXT);
        $statement->bindValue(':t', $this->tipoDeCurso, SQLITE3_TEXT);
        $statement->bindValue(':c', $this->cargaHoraria, SQLITE3_TEXT);

        return $statement->execute();
    }

    static function display(){
        $dados = self::$conexao -> query("SELECT * FROM cursos");
        echo "<table class='user_table_registered'>";
        while(($linha = $dados->fetchArray())){   
        echo "<tr class='user_lines_table_registered color1 font1'>
                <td><span style='color:black; font-weight:bold; font-size: 16pt; padding-left: 20px'>Nome: </span>" .$linha['nome']."</td> <td><span style='color:black; font-weight:bold; font-size: 16pt'>Tipo: </span>".$linha['tipoDeCurso']."</td> <td><span style='color:black; font-weight:bold; font-size: 16pt'>CH: </span>".$linha['cargaHoraria']."</td>
             </tr>";
        }
        echo"</table>";
    }
}
?>