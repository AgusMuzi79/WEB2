<?php
require_once './app/db.php';

function showTasks() {
    require 'templates/header.php';

    $tasks = getTasks();

    require 'templates/form_alta.php';
    ?>

    <ul class = "list-group">
    <?php foreach ($tasks as $task) { ?>
        <li class="list-group-item item-task">
            <div>
                <b><?php echo $task -> titulo;?></b> | (Prioridad <?php echo $task -> prioridad;?>)
            </div>
            <div class="actions">
                <a href="eliminar/<?php echo $task -> id ?>" type="button" class='btn btn-danger nl-auto'>Borrar</a>
                <a href="finalizar/<?php echo $task->id ?>" type="button" class='btn btn-danger nl-auto'>Finalizar</a>
            </div>
        </li>
    <?php } ?>
    </ul>

    <?php
    
    require 'templates/footer.php';
}

function addTask() {
    // TODO: validacion de datos

    $title = $_POST['title'];
    $priority = $_POST['priority'];
    $description = $_POST['description'];

    $id = insertTask($title, $priority, $description);

    if ($id) {
        header('Location: ' . BASE_URL);
    } else {
        echo "Error al insertar la tarea";
    }
    
}   

function removeTask($id) {
    deleteTask($id);
    header('Location: ' . BASE_URL);
}

function finishTask ($id) {
    var_dump($id);
}