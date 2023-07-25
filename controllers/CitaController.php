<?php

namespace Controllers;

use MVC\Router;

class CitaController {
    public static function index( Router $router) {

        session_start();
        isAuth();
        
        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'], // añade automaticamente el nombre en el formulario
            'id' => $_SESSION['id']
        ]);
    }
}