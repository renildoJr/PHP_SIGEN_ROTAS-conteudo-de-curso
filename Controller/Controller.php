<?php 

// Quando uma classe não tem um papel específico, podemos chama-la de classe abstrata 
// A classe abstrata não pode ter instância
// O ideal é abrigar um conjunto de métodos que serão abrigados por outras classes

// Isso vai garantir que não haverá nenhuma instância da classe controller
abstract class Controller {
    
    // public function isProtected() { // Mudamos public para protected, para que este 
    // método seja acessado somente pelas classes filhas dessa 
    // Estes métodos também poderão ser estático, porque sempre estaremos falando da mesma sessão de usuario e não utlizaremos $this
    protected static function isProtected() {
        if(!isset($_SESSION["usuario_logado"])) {
            header("Location: /login");
        }
    }
}

