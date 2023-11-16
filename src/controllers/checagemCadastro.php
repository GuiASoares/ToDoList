<?php
    session_start();

    require("../../vendor/autoload.php");
    
    use Src\Entity\Tarefa;

    $descricao = $_POST['descricao'] ?? '';
    $id_usuario = $_SESSION['id'];

    if(!isset($descricao)){
        header('Location: formulario.php?erro=naoInserido');
        exit;
    } else {
        $obTarefa = new Tarefa($descricao, '', $id_usuario);
        $cadastro = $obTarefa->cadastrar();
        $cadastro ? header('Location: ../../public/pages/index.php') : header('Location: ../../public/pages/criarTarefa.php?erro=naoCadastrado');
    }
?>