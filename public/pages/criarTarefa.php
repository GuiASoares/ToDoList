<?php
    session_start();
    if(!isset($_SESSION['nome'], $_SESSION['id'])){
        header('Location: index.php?erro=naoLogado');
        exit;
    }
    include('../includes/header.php');
    include('../includes/formulario.php');
    include('../includes/footer.php');
?>