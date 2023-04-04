<?php

class CategoriaDAO extends DAO {

    /**
     * Cria um novo objeto para fazer o crud de categorias.
     */
    public function __construct() {
        parent::__construct();
    }

    /** Pega uma row única
     * */ 
    public function getById($id) {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    /**
     * Retorna todos os registros da tabela Categoria.
     */
    public function getAllRows() {
        $stmt = $this->conexao->prepare("SELECT * FROM categoria");
        $stmt->execute();

        $arr_categorias = array();

        while($c = $stmt->fetchObject())
            $arr_categorias[] = $c;

        return $arr_categorias;
       
    }

    /**
     * Método que insere uma categoria no MySQL.
     */
    public function insert($dados_categoria) {
        $stmt = $this->conexao->prepare("INSERT INTO categoria (descricao) VALUES (?)");
        $stmt->bindValue(1, $dados_categoria['descricao']);
        $stmt->execute();
    }   

    /**
     * Atualiza registro da categoria.
     */
    public function update($dados_categoria) {
        $stmt = $this->conexao->prepare("UPDATE categoria SET descricao = ? WHERE id = ?");
        $stmt->bindValue(1, $dados_categoria["descricao"]);
        $stmt->bindValue(2, $dados_categoria["id"]);
        $stmt->execute();
    }

    /**
     * Remove registro de categora.
     */
    public function delete($id) {
        $stmt = $this->conexao->prepare("DELETE FROM categoria WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }

}