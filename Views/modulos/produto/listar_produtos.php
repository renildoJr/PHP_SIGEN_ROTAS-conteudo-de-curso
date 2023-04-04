<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>SIGEN | Listar Produtos</title>
</head>
<body>
    <?php include PATH_VIEW."includes/cabecalho.php" ?>
    <main class="container mt-3">
        <h2>Lista de Produtos</h2>
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Ações</th>
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Preço</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $total_produtos; $i++): ?>
                <tr>
                    <td>
                        <a href="produto/ver?id=<?=$lista_produtos[$i]->id?>">Abrir</a>
                    </td>
                    <td><?=$lista_produtos[$i]->id?></td>
                    <td><?=$lista_produtos[$i]->descricao?></td>
                    <td><?=$marca_dao->getById($lista_produtos[$i]->id_marca)->descricao?></td>
                    <td><?=$categoria_dao->getById($lista_produtos[$i]->id_categoria)->descricao?></td>
                    <td><?=$lista_produtos[$i]->preco?></td>
                </tr>
                <?php endfor ?>
            </tbody>
        </table>
    </main>
    <?php 
        include PATH_VIEW."includes/rodape.php";
        include PATH_VIEW."includes/js_config.php"
    ?>
</body>
</html>