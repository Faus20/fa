<?php

require_once('controllers/paciente.controller.php');

    // base url
    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

    // define una acción por defecto
    if (empty($_GET['action'])) {
        $_GET['action'] = 'home';
    } 

    // toma la acción que viene del usuario y parsea los parámetros
    $accion = $_GET['action']; 
    $parametros = explode('/', $accion);

    // TABLA DE RUTEO
    switch ($parametros[0]) {
        case 'home': 
           $PacienteController = new PacienteController();
           $PacienteController->mostrarHome();
        break;
        case 'filtrarEspecialidad':
            $PacienteController = new PacienteController();
            $PacienteController->mostrarMedicosPorEspecialidad();
            break;
            case 'filtrarObraSocial':
                $PacienteController = new PacienteController();
                $PacienteController->mostrarMedicosPorObra();
                break;
        default:  
            echo "404";
        break;
        
    }