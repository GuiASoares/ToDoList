<?php
    require('../../vendor/autoload.php');

    use Src\Entity\Tarefa;

    if(!isset($_GET['id']) || !isset($_GET['filtro'])){
        header('Location: ../../public/pages/index.php');
        exit;
    }
    $filtro = $_GET['filtro'];
    $id = $_GET['id'];

    $tarefa = new Tarefa('', $id);

    $excluido = $tarefa->excluirTarefa();

    if($excluido){
        header('Location: ../../public/pages/index.php?filtro='.$filtro);
        exit;
    }