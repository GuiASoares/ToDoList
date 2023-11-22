<?php
    session_start();
    
    require('../Entity/usuario.php');

    if(!isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['senhaConfirm'])){
        header('Location: ../../public/pages/index.php?pag=registerForm&erro=invalidos');
        exit;
    }
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senhaConfirm = $_POST['senhaConfirm'];

    if($senha != $senhaConfirm){
        header('Location: ../../public/pages/index.php?pag=registerForm&erro=senhasDiferentes');
        exit;
    }

    $usuario = new Usuario($nome, $email);
    $usuario->__set('senha', $senha);
    $registrar = $usuario->registrarUsuario();

    if(!$registrar){
        header('Location: ../../public/pages/index.php?pag=registerForm&erro=emailCadastrado');
        exit;
    } else {
        $_SESSION['nome'] = $usuario->nome;
        $_SESSION['id'] = $usuario->id;
        header('Location: ../../public/pages/mainPage.php');
        exit;
    }
