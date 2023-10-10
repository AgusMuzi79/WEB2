<?php
/**
 * Obtiene de la base de datos todas las tareas
 */

 function getConection() {
    return new PDO ('mysql:host=localhost;dbname=db_tareas;charset=utf8', 'root', '');

 }
 function getTasks() {
    $db = getConection();

    $query = $db -> prepare('SELECT * FROM tareas');
    $query -> execute();

    $tasks = $query -> fetchAll(PDO::FETCH_OBJ); // fetchAll es para devolver un arreglo de tareas en este caso y fetch es para devolver una tarea en especifico

    return $tasks;

}

function insertTask($title, $priority, $description) {
    $db = getConection();

    $query = $db->prepare('INSERT INTO tareas(titulo, descripcion, prioridad) VALUES(?, ?, ?)');
    $query->execute([$title, $priority, $description]);
    
    return $db->lastInsertId();
}