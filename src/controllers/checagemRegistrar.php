<?php
    session_start();
    
    require('../../vendor/autoload.php');

    use Src\Entity\Usuario;

    if(!isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['senhaConfirm'])){
        header('Location: ../../public/pages/index.php?pag=registerForm');
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

    if($registrar){
        $_SESSION['nome'] = $usuario->nome;
        header('Location: ../../public/pages/mainPage.php');
        exit;
    } else {
        header('Location: ../../public/pages/index.php?pag=registerForm');
        exit;
    }
