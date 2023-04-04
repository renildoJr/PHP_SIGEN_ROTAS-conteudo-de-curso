<?php

class MarcaDAO extends DAO {
      /**
     * Cria um novo objeto para fazer o crud de Marcas.
     */
    public function __construct() {
        parent::__construct();
    }
 
    /** Pega uma row única
     * */ 
    public function getById($id) {
        $stmt = $this->conexao->prepare("SELECT * FROM marca WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    /**
     * Retorna todos os registros da tabela Marca.
     */
    public function getAllRows() {
        $stmt = $this->conexao->prepare("SELECT * FROM marca");
        $stmt->execute();
        $arr_marcas = array();
        while($m = $stmt->fetchObject())  {
            $arr_marcas[] = $m;
        }
        return $arr_marcas;
    }

      /**
     * Método que insere uma marca no MySQL.
     */
    public function insert($dados_marca) {
        $stmt = $this->conexao->prepare("INSERT INTO marca (descricao) VALUES (?)");
        $stmt->bindValue(1, $dados_marca["descricao"]);
        return $stmt->execute();
    }

     /**
     * Atualiza registro da marca.
     */
    public function update($dados_marca) {
        $stmt = $this->conexao->prepare("UPDATE marca SET descricao = ? WHERE id = ?");
        $stmt->bindValue(1, $dados_marca["descricao"]);
        $stmt->bindValue(2, $dados_marca["id"]);
        $stmt->execute();
    }

    /**
     * Remove registro de marca.
     */
    public function delete($id) {
        $stmt = $this->conexao->prepare("DELETE FROM marca WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}