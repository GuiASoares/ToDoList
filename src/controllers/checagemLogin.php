<?php
    session_start();

    require('../Entity/usuario.php');

    if(!isset($_POST['email'], $_POST['senha'])){
        header('Location: ../../public/pages/index.php?erro=naoPreenchidos');
        exit;
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario($nome, $email);
    $usuario->__set('senha', $senha);
    $consulta = $usuario->entrarUsuario();

    if(!$consulta){
        header('Location: ../../public/pages/index.php?erro=invalidos');
        exit;
    } else {
        $_SESSION['nome'] = $usuario->nome;
        $_SESSION['id'] = $usuario->id;
        header('Location: ../../public/pages/mainPage.php');
        exit;
    }
    