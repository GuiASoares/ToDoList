<?php
    require('../../vendor/autoload.php');

    use Src\Entity\Tarefa;

    $filtro = $_GET['filtro'] ?? '';
    if($filtro == 'pendentes'){
        $filtragem = 'situacao="pendente"';
    } else if($filtro == 'concluidos'){
        $filtragem= 'situacao="concluido"';
    } else {
        $filtragem = '';
    }

    $obTarefa = new Tarefa();
    $tarefas = $obTarefa->consultar($filtragem);