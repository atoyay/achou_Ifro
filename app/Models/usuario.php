<?php

require_once "../../config/banco.php";

class Usuario {

    private $banco;

    public function __construct() {
        $conexao = new Banco();
        $this->banco = $conexao->conectar();
    }

    public function cadastrar($nome, $email) {

        $sql = "INSERT INTO usuarios (nome, email)
                VALUES ('$nome', '$email')";

        return $this->banco->query($sql);
    }
}