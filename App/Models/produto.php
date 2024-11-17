<?php


class Produto extends PDO{
    private $table;

    function __construct() {
        // Defina o DSN, usuário e senha para a conexão
        $dsn = 'mysql:host=localhost;dbname=BANCO;charset=utf8';
        $usuario = 'root';
        $senha = '246853Gi@';


        parent::__construct($dsn, $usuario, $senha);

        $this->table = 'PRODUTO';


    }    
}