CREATE DATABASE sistema;
USE sistema;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

<?php
class Banco {

    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "sistema";

    public function conectar() {

        $conexao = new mysqli(
            $this->servidor,
            $this->usuario,
            $this->senha,
            $this->banco
        );

        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }

        return $conexao;
    }
}