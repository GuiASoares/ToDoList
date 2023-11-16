<?php
    session_start();

    require('../../vendor/autoload.php');

    use Src\Entity\Usuario;

    if(!isset($_POST['email'], $_POST['senha'])){
        header('Location: ../../public/pages/index.php?erro=invalidos');
        exit;
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = new Usuario($nome, $email);
    $usuario->__set('senha', $senha);
    $consulta = $usuario->entrarUsuario();

    if(!$consulta){
        header('Location: ../../public/pages/index.php?erro=naoCadastrado');
        exit;
    } else {
        $_SESSION['nome'] = $usuario->nome;
        $_SESSION['id'] = $usuario->id;
        header('Location: ../../public/pages/mainPage.php');
        exit;
    }
    