<?php
    require('../Entity/tarefa.php');

    $filtro = $_POST['filtro'] ?? '';
    if(!isset($_POST['id'])){
        header('Location: ../../public/pages/index.php?filtro='.$filtro);
        exit;
    }

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];

    $tarefa = new Tarefa($descricao, $id);
    $atualizacao = $tarefa->atualizarTarefa();

    $atualizacao == true ? header('Location: ../../public/pages/index.php?filtro='.$filtro.'&atualizacao=true') : header('Location: ../../public/pages/index.php?fitro='.$filtro.'&atualizacao=false');
    