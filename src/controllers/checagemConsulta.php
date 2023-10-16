<?php
    require('../../vendor/autoload.php');

    use Src\Entity\Tarefa;

    $filtro = $_GET['filtro'] ?? 'pendentes';

    $tarefa = new Tarefa();
    $tarefas = $tarefa->consultar($filtro);
    echo '<pre>';
    print_r($tarefas);
    echo '</pre>';