<?php

try {

    switch($uri_parse) {
        // Tela inicial 
        case '/':
            DashboardController::index();
        break;

        // Login
        case '/login':
            LoginController::login();
            break;

        case '/autenticar':
            LoginController::autenticar();
            break;

        case '/sair':
            LoginController::sair();
            break;

        // Rotas para trabalhar com produtos
        case '/produto':
            ProdutoController::index();
        break;
        
        case '/produto/cadastrar':
            ProdutoController::cadastrar();
        break;
        
        case '/produto/ver':
            ProdutoController::ver();
        break;

        case '/produto/salvar':
            ProdutoController::salvar();
        break;

        case '/produto/excluir':
            ProdutoController::excluir();
        break;

        // Rotas para trabalhar com marcas
        case '/marca':
            MarcaController::index();
        break;

        case '/marca/cadastrar':
            MarcaController::cadastrar();
        break;

        case '/marca/ver':
            MarcaController::ver();
        break;

        case '/marca/salvar':
            MarcaController::salvar();
        break;

        case '/marca/excluir':
            MarcaController::excluir();
        break;

        // Rotas para trabalhar com categorias
        case '/categoria':
            CategoriaController::index();
        break;

        case '/categoria/cadastrar':
            CategoriaController::cadastrar();
        break;

        case '/categoria/salvar':
            CategoriaController::salvar();
        break;

        case '/categoria/ver':
            CategoriaController::ver();
        break;

        case '/categoria/excluir':
            CategoriaController::excluir();
        break;

        default:
            echo "404";
        break;
    }
}catch(Exception $e) {
    echo $e->getMessage();
}