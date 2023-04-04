<?php

class MarcaController extends Controller {
    public static function index() {
        parent::isProtected();
        $marcas_dao = new MarcaDAO();
        $lista_marcas = $marcas_dao->getAllRows();
        $total_marcas = count($lista_marcas);
        include "Views/modulos/marca/listar_marcas.php";
    }

    public static function ver() {
        parent::isProtected();
        $marcas_dao = new MarcaDAO();
        $dados_marca = $marcas_dao->getById($_GET["id"]);
        include "Views/modulos/marca/cadastrar_marca.php";
    }

    public static function cadastrar() {
        parent::isProtected();
        include "Views/modulos/marca/cadastrar_marca.php";
    }

    public static function salvar() {
        parent::isProtected();
        $marcas_dao = new MarcaDAO();
        $dados_para_salvar = array(
            'descricao' => $_POST["descricao"]
        );
        if(isset($_POST["id"])) {
           $dados_para_salvar['id'] = $_POST["id"];
           $marcas_dao->update($dados_para_salvar);
        }else {
            $marcas_dao->insert($dados_para_salvar);
        }
        header("Location: /marca");
    }

    public static function excluir() {
        parent::isProtected();
        $marcas_dao = new MarcaDAO();
        $marcas_dao->delete($_GET["id"]);
        header("Location: /marca");
    }
}