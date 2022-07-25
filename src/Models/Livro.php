<?php 

namespace Projeto\Glau\Models;

class Livro extends Model {

    protected $titulo;
    protected $autor;

    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function save() {
        $statement = self::$conexao->prepare("INSERT INTO livros(titulo, autor) VALUES (:t, :a)");
        $statement->bindValue(':t', $this->titulo, SQLITE3_TEXT);
        $statement->bindValue(':a', $this->autor, SQLITE3_TEXT);

        return $statement->execute();
    }
    static function display(){
        $dados = self::$conexao -> query("SELECT * FROM livros");
        echo "<table class='user_table_registered'>";
        while(($linha = $dados->fetchArray())){   
            echo "<tr class='user_lines_table_registered color1 font1'>
                    <td><span style='color:black; font-weight:bold; font-size: 16pt; padding-left: 20px'>Título: </span>" .$linha['titulo']."</td> <td><span style='color:black; font-weight:bold; font-size: 16pt'>Autor(a): </span>".$linha['autor']."</td>
                </tr>";
        }
        echo"</table>";
    }
}
?>