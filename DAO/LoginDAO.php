<?php

class LoginDAO extends DAO {
    /**
     * Cria um novo objeto para fazer o crud de categorias.
     */
    public function __construct() {
        parent::__construct();
    }

    public function getUserByUserAndPass($usuario, $senha) {
        $sql = "SELECT id, nome FROM usuarios WHERE usuario = ? AND senha = ?";
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $usuario);
        $stmt->bindValue(2, $senha);
        $stmt->execute();
        return $stmt->fetchObject();
    }

}