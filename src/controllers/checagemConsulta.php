<?php
    require('../../src/Entity/tarefa.php');

    $filtro = $_GET['filtro'] ?? '';
    if($filtro == 'pendentes'){
        $filtragem = 'situacao="pendente" AND id_usuario='.$_SESSION['id'];
    } else if($filtro == 'concluidos'){
        $filtragem= 'situacao="concluido" AND id_usuario='.$_SESSION['id'];
    } else {
        $filtragem = 'id_usuario='.$_SESSION['id'];
    }

    $obTarefa = new Tarefa();
    $tarefas = $obTarefa->consultar($filtragem);