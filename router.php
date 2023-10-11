<?php
    require_once 'app/tasks.php';

    define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

        // lee la acción
    if (!empty($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'listar'; // acción por defecto si no envían
    }

    
    $params = explode('/', $action);


    // determina que camino seguir según la acción
    switch ($params[0]) {
        case 'listar':
            showTasks();
            break;
        case 'agregar':
            addTask();
            break;
        case 'eliminar':
            removeTask($params[1]);
            break;
        case 'finalizar':
            finishTask($params[1]);
            break;
        default:
            echo('404 Page not found');
            break;
    }





?>