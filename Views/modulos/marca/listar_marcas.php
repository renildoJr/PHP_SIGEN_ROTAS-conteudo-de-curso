<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>SIGEN | Listar Marcas</title>
</head>
<body>
    <?php include PATH_VIEW."includes/cabecalho.php" ?>
    <main class="container mt-3">
        <h2>Lista de Marcas</h2>
        <table class="table mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>Ações</th>
                    <th>Id</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $total_marcas; $i++): ?>
                <tr>
                    <td>
                        <a href="/marca/ver?id=<?=$lista_marcas[$i]->id?>">Abrir</a>
                    </td>
                    <td><?=$lista_marcas[$i]->id?></td>
                    <td><?=$lista_marcas[$i]->descricao?></td>
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