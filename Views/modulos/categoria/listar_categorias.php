<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>SIGEN | Listar Categorias</title>
</head>
<body>
    <?php include PATH_VIEW."includes/cabecalho.php" ?>
    <main class="container mt-3">

        <?php if(isset($_GET["excluido"])):?>
            <p>Categoria foi excluida!</p>
        <?php endif?>

        <h2>Lista de Categorias</h2>

        <table class="table table-hover mt-3">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Ações</th>
                    <th scope="col">Id</th>
                    <th scope="col-lg-9">Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $total_categorias; $i++): ?>
                <tr scope="row">
                    <td>
                        <a href="categoria/ver?id=<?=$lista_categorias[$i]->id?>">Abrir</a>
                    </td>
                    <td><?=$lista_categorias[$i]->id?></td>
                    <td><?=$lista_categorias[$i]->descricao?></td>
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