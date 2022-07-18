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
        while(($linha = $dados->fetchArray())){   
        echo "<ul>
                  <li>Nome: ".$linha['nome'].", tipo de curso: ".$linha['tipoDeCurso'].", carga horária: ".$linha['cargaHoraria']."</li>
              </ul>";
        }
    }
}
?>