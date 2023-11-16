<?php
    session_start();
    if(!isset($_SESSION['nome'], $_SESSION['id'])){
        header('Location: index.php?erro=naoLogado');
        exit;
    }
    include('../../src/controllers/checagemConsulta.php');
    include('../includes/header.php');
    include('../includes/listagem.php');
    include('../includes/footer.php');