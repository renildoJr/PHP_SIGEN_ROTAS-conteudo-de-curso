<?php
session_start();


try {

    include "DAO/MySQL.php";

    $mysql = new MySQL();
    
    $sql = "SELECT id, nome FROM usuarios WHERE usuario = ? AND senha = ?";
    
    $stmt = $mysql->prepare($sql);

    $stmt->bindValue(1, $_POST["user"]);
    $stmt->bindValue(2, $_POST["pass"]);

    $stmt->execute();

    $dados_do_usuario = $stmt->fetchObject();


    if($dados_do_usuario) {
        $_SESSION["usuario_logado"] = $dados_do_usuario->id;
        header("Location: /");
    }else {
        header("Location: login?falhou=true");
    }


}catch(Exception $e) {
    echo $e->getMessage();
}

?>