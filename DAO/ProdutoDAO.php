<?php

class ProdutoDAO extends DAO {
    /**
     * Cria novo objeto para fazer CRUD de produto
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Pega um único produto indicado pelo id
     */
    public function getById($id) {
        $stmt = $this->conexao->prepare("SELECT * FROM produto WHERE id = ?");
        $stmt->bindValue(1, $id);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    /**
     * Pega todos os produtos existentes
     */
    public function getAllRows() {
        $stmt  = $this->conexao->prepare("SELECT * FROM produto");
        $stmt->execute();
        $arr_produtos = array();

        while($p = $stmt->fetchObject()) {
            $arr_produtos[] = $p;
        }

        return $arr_produtos;
    }

    /**
     * Insere um novo produto
     */
    public function insert($dados_produto) {
        $stmt = $this->conexao->prepare("INSERT INTO produto (descricao, id_marca, id_categoria, preco) VALUES (?, ?, ?, ?)");
        $stmt->bindValue(1,$dados_produto["descricao"]);
        $stmt->bindValue(2,$dados_produto["id_marca"]);
        $stmt->bindValue(3,$dados_produto["id_categoria"]);
        $stmt->bindValue(4,$dados_produto["preco"]);
        $stmt->execute();
    }

    /**
     * Atualiza um produto existente
     */
    public function update($dados_produto) {
        $stmt = $this->conexao->prepare("UPDATE produto SET descricao = ?, id_marca = ?, id_categoria = ?, preco = ? WHERE id = ?");
        $stmt->bindValue(1, $dados_produto["descricao"]);
        $stmt->bindValue(2, $dados_produto["id_marca"]);
        $stmt->bindValue(3, $dados_produto["id_categoria"]);
        $stmt->bindValue(4, $dados_produto["preco"]);
        $stmt->bindValue(5, $dados_produto["id"]);
        $stmt->execute();
    }
    
    /**
     * Exclui um produto existente
    */
    public function delete($id) {
        $stmt = $this->conexao->prepare("DELETE FROM produto WHERE id = ?");
        $stmt->bindvalue(1, $id);
        $stmt->execute();
    }
}