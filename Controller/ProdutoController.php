<?php

class ProdutoController Extends Controller {

    // OBS: as verificações do método "isProtected()" estão sendo feita antes de qualquer execução de código logo após
    // ou seja, as operações só poderão ser feitas se houver um usuário logado
    public static function index() {
        parent::isProtected();
        $produto_dao = new ProdutoDAO();
        $categoria_dao = new CategoriaDAO(); 
        $marca_dao = new MarcaDAO(); 
        $lista_produtos = $produto_dao->getAllRows();
        $total_produtos = count($lista_produtos);        
        include 'Views/modulos/produto/listar_produtos.php';
    }

    public static function ver() {
        parent::isProtected();
        if(isset($_GET['id'])) {
            $produto_dao = new ProdutoDAO();
            $categoria_dao = new CategoriaDAO(); 
            $categoria_marca = new MarcaDAO();  
            $lista_categorias = $categoria_dao->getAllRows();
            $total_categorias = count($lista_categorias);
            $lista_marcas = $categoria_marca->getAllRows();
            $total_marcas = count($lista_marcas);
            $dados_produto = $produto_dao->getById($_GET['id']);
            include 'Views/modulos/produto/cadastrar_produto.php';
        }
    }

    public static function cadastrar() {
        parent::isProtected();
        $categoria_dao = new CategoriaDAO(); 
        $categoria_marca = new MarcaDAO();  
        $lista_categorias = $categoria_dao->getAllRows();
        $total_categorias = count($lista_categorias);
        $lista_marcas = $categoria_marca->getAllRows();
        $total_marcas = count($lista_marcas);
        include "Views/modulos/produto/cadastrar_produto.php";
    }

    public static function salvar() {
        parent::isProtected();
        $produto_dao = new ProdutoDAO();
        $dados_para_salvar = array(
            'descricao' => $_POST["descricao"],
            'preco' => $_POST["preco"],
            'id_marca' => $_POST["marca"],
            'id_categoria' => $_POST["categoria"]
        );
        if(isset($_POST["id"])) {
            $dados_para_salvar['id'] = $_POST["id"];
            $produto_dao->update($dados_para_salvar);
        }else {
            $produto_dao->insert($dados_para_salvar);
        }
        header("Location: /produto");
    }

    public static function excluir() {
        parent::isProtected();
        $produto_dao = new ProdutoDAO();
        $produto_dao->delete($_GET["id"]);
        header("Location: /produto");
    }
}