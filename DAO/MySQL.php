<?php

class MySQL extends PDO {

    private $host = "localhost";
    private $usuario = "root";
    private $senha = "8423";
    private $db = "sistema_revisao";

    // 1. Define como os erros serão capiturados em pdo, nesse caso, define como os erros serão capiturados em Exception
    private $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    public function __construct() {

        // data source name
        $dsn = "mysql:host=".$this->host.";dbname=".$this->db;

        // 2. passamos a variavel opcoes como o último parâmetro
        return parent::__construct($dsn, $this->usuario, $this->senha, $this->opcoes);
        // :: OPERADOR DE RESOLUÇÃO DE CONTEXTO ESTÁTICO ( ESSE  ACESSA O CONTEÚDO DA CLASSE)
        // -> ACESSA O CONTEÚDO DA INSTÊNCIA DE UM OBJETO
    }
}