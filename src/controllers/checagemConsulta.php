<?php
    require('../../vendor/autoload.php');

    use Src\Entity\Tarefa;

    $filtro = $_GET['filtro'] ?? 'pendentes';
    $filtro = $filtro == 'pendentes' ? 'situacao="pendente"' : '';

    $obTarefa = new Tarefa();
    $tarefas = $obTarefa->consultar($filtro);