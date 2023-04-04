<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>Cadastro de Produtos</title>
    <style>
        label, input, select {
            display: block;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php include PATH_VIEW."includes/cabecalho.php"?>
    <main class="container mt-3">
        <h2>Cadastro de Produto</h2>
        <form method="post" action="/produto/salvar">
            <div class="form-group">
                <label for="descricao">Descrição (Nome) do produto:</label>
                <input class="form-control"  type="text" name="descricao" id="descricao" value="<?=isset($dados_produto) ? $dados_produto->descricao : "" ?>">
            </div>
            
            <div class="form-group">
                <label>Preço:</label>
                <input type="number" name="preco" value="<?= isset($dados_produto) ? $dados_produto->preco : ""?>">
            </div>

            <div class="form-group">
                <label for="foto">Foto:</label>
                <input class="form-control-file"  type="file" name="foto" id="foto">
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label>Categoria:</label>
                    <select name="categoria" id="categoria">
                        <option value="">Selecione a categoria</option>
                        <?php for($i=0; $i<$total_categorias; $i++): 
                            
                            $selecionado = "";

                            if(isset($dados_produto->id_categoria)) {
                                $selecionado = ($lista_categorias[$i]->id == $dados_produto->id_categoria)  ? "selected" : "";
                            }
                            
                        ?>
                            <option value="<?= $lista_categorias[$i]->id?>" <?= $selecionado ?>>
                            <?=$lista_categorias[$i]->descricao?></option>
                        <?php endfor?>
                    </select>
                </div>
            </div>
            
            <div class="form-group">
                <label>Marca:</label>
                <select name="marca" id="marca">
                    <option value="">Selecione a marca</option>
                    <?php for($i=0; $i<$total_marcas; $i++): 
                        
                        $selecionado = "";

                        if(isset($dados_produto->id_marca)) {
                            $selecionado = ($lista_marcas[$i]->id == $dados_produto->id_marca) ? "selected" : "";
                        }
                        
                    ?>
                        <option value="<?= $lista_marcas[$i]->id?>" <?= $selecionado ?>>
                        <?=$lista_marcas[$i]->descricao?>
                    </option>
                    <?php endfor?>
                </select>
            </div>
            
            <?php if(isset($dados_produto)):?>
                <input type="hidden" name="id" value="<?= $dados_produto->id?>">
                <a class="btn btn-danger mt-3" href="/produto/excluir?id=<?= $dados_produto->id?>">EXCLUIR</a>
            <?php endif ?>
            <input type="submit"class="btn btn-success mt-3" value="Salvar">
        </form>
    </main>
    <?php 
        include PATH_VIEW."includes/rodape.php";
        include PATH_VIEW."includes/js_config.php"
    ?>
</body>
</html>