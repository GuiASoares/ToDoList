<?php
    include('../includes/header.php');
    $pagina = $_GET['pag'] ?? 'loginForm';
    include('../includes/login/'.$pagina.'.php');
    include('../includes/footer.php');
?>