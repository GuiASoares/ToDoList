<?php
    session_start();
    if(isset($_SESSION['nome'], $_SESSION['id'])){
        header('Location: mainPage.php');
        exit;
    }
    include('../includes/header.php');
    $pagina = $_GET['pag'] ?? 'loginForm';
    include('../includes/login/'.$pagina.'.php');
    include('../includes/footer.php');
?>