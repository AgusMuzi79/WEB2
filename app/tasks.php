<?php
require_once './app/db.php';

function showTasks() {
    require 'templates/header.php';

    $tasks = getTasks();

    ?>

    <ul class = "list-group">
    <?php foreach ($tasks as $task) { ?>
        <li class="list-group-item">
            <b><?php echo $task -> titulo;?></b> | (Prioridad <?php echo $task -> prioridad;?>)
        </li>
    <?php } ?>
    </ul>

    <?php


    require 'templates/footer.php';
}