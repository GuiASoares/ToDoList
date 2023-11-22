<?php
    require('../Entity/tarefa.php');

    if(!isset($_GET['id']) || !isset($_GET['filtro'])){
        header('Location: ../../public/pages/index.php');
        exit;
    }
    $filtro = $_GET['filtro'] ?? '';
    $id = $_GET['id'];
    $tarefa = new Tarefa('',$id);
    $mudanca = $tarefa->mudarSituacao();

    if($mudanca){
        header('Location: ../../public/pages/index.php?filtro=' .$filtro);
        exit;
    } else {
        header('Location: ../../public/pages/index.php?filtro=' .$filtro. '&erro=naoAtualizada');
        exit;
    }