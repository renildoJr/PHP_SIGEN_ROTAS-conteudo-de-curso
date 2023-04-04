<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>Cadastrar Categoria</title>
</head>
<body>
    <div id="global">
        <?php include PATH_VIEW."includes/cabecalho.php"?>
        <main class="container mt-3">
            <h2>Cadastro de Categoria</h2>
            <form action="/categoria/salvar" method="post">
            <div class="form-group">
                <label>Descrição (Nome) da Categoria</label>
                <input type="text" name="descricao" class="form-control" value="<?= isset($dados_categoria) ? $dados_categoria->descricao : ""?>">
            </div>
                <?php if(isset($dados_categoria)):?>
                    <input type="hidden" name="id" value="<?= $dados_categoria->id?>">
                    <a class="btn btn-danger mt-3" href="/categoria/excluir?id=<?= $dados_categoria->id?>">EXCLUIR</a>
                <?php endif ?>

                <button type="submit" class="btn btn-success mt-3">Salvar</button>
            </form>
        </main>
    </div>
    <?php 
        include PATH_VIEW."includes/rodape.php";
        include PATH_VIEW."includes/js_config.php"
    ?>
</body>
</html>