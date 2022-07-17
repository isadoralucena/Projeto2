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
}
?>