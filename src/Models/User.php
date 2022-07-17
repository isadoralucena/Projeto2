<?php 

namespace Projeto\Glau\Models;

class User extends Model {

    protected $username;
    protected $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_BCRYPT);//bagunçando a senha
    }

    public function save() {
        $statement = self::$conexao->prepare("INSERT INTO users(username, password) VALUES (:u, :p)");
        $statement->bindValue(':u', $this->username, SQLITE3_TEXT);
        $statement->bindValue(':p', $this->password, SQLITE3_TEXT);

        return $statement->execute();

    }
    //objetivo é verificar e evitar com que se tenha varios users com o mesmo username
    //users diferentes podem ter a mesma senha
    static function exists ($username, $password) {
        $sttm = self::$conexao->prepare("SELECT * FROM users WHERE username = :user;");
        $sttm->bindValue(':user', $username, SQLITE3_TEXT);

        $result = $sttm->execute();
        $row = $result->fetchArray();//row recebe result como array
        if (isset($row)) {
            //verifica se tem senhas iguais (a normal e a criptografada)
            return password_verify($password, $row['password']) ? true : false;
        }
        return false;
    }
}