<?php
    session_start();

    require('../../vendor/autoload.php');

    if(!isset($_POST['nome'], $_POST['email'], $_POST['senha'])){
        header('Location: ../../public/pages/index.php');
        exit;
    }
    