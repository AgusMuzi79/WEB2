<?php
/**
 * Obtiene de la base de datos todas las tareas
 */
function getTasks() {
    $db = new PDO ('mysql:host=localhost;dbname=db_tareas;charset=utf8', 'root', '');
    
    $query = $db -> prepare('SELECT * FROM tareas');
    $query -> execute();

    $tasks = $query -> fetchAll(PDO::FETCH_OBJ); // fetchAll es para devolver un arreglo de tareas en este caso y fetch es para devolver una tarea en especifico

    return $tasks;

}