<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>Cadastrar Marca</title>
</head>
<body>
    <div id="global">
        <?php include PATH_VIEW."includes/cabecalho.php"?>
        <main class="container mt-3">
            <h2>Cadastro de Marca</h2>
            <form action="/marca/salvar" method="post">
                <div class="form-group">
                    <label>Descrição (Nome) da marca</label>
                    <input type="text" name="descricao" value="<?= isset($dados_marca) ? $dados_marca->descricao : ""?>">
                </div>
                <?php if(isset($dados_marca)):?>
                    <input type="hidden" name="id" value="<?= $dados_marca->id?>">
                    <a class="btn btn-danger mt-3" href="/marca/excluir?id=<?= $dados_marca->id?>">EXCLUIR</a>
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