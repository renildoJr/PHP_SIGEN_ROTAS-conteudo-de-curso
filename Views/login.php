<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include PATH_VIEW."includes/css_config.php" ?>
    <title>Login</title>
</head>
<body>
<header class="container mt-3">
    <div class="row mb-3">
        <div class="col-md-9">
            <h1>SIGEN <small>Sistema de Gestão</small></h1>
        </div>
    </div>
</header>
    <div id="global">
        <main class="container mt-3">
            <div style="margin:0 auto; max-width:40%">      
                <form action="/autenticar" method="post">
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input class="form-control" id="user" type="text" name="user">
                    </div>
                    
                    <div class="form-group">
                        <label for="pass" >Senha</label>
                        <input class="form-control" id="pass" type="password" name="pass">
                    </div>
                    <button type="submit" class="btn btn-success">Entrar</button>
                </form>
            </div> 
        </main>
    </div>
    <footer class="container text-center mt-3 mb-3">
    <hr>
    SIGEN &copy; 2023 - Todos os direitos reservados
</footer>
</body>
</html>