<?php

class DashboardController extends Controller {
    public static function index() {

        // acessar ...
        parent::isProtected();
        include 'Views/home.php';
    }
}