<?php
    if(!isset($_GET['id'])){
        header('Location: index.php');
        exit;
    }
    include('../includes/header.php');
    include('../includes/formulario.php?editar=true&id=$_GET["id"]');
    include('../includes/footer.php');