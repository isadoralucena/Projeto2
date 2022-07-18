<?php


use Projeto\Glau\Models\Model;

//registrando conexao com o banco de dados
Model::registerConection(new SQLite3(__DIR__.'/banco.db'));//criando banco
Model::registerModel('CREATE TABLE IF NOT EXISTS users(username TEXT, password TEXT )');//criando table
Model::registerModel('CREATE TABLE IF NOT EXISTS cursos(nome TEXT, tipoDeCurso TEXT, cargaHoraria REAL)');//criando outra table
Model::registerModel('CREATE TABLE IF NOT EXISTS livros(titulo TEXT, autor TEXT)');//criando outra table
?>