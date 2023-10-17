<?php
    require("../../vendor/autoload.php");
    
    use Src\Entity\Tarefa;

    $descricao = $_POST['descricao'] ?? '';

    if(!isset($descricao)){
        header('Location: formulario.php?erro=naoInserido');
        exit;
    } else {
        $obTarefa = new Tarefa($descricao);
        $cadastro = $obTarefa->cadastrar($descricao);
        $cadastro ? header('Location: ../../public/pages/index.php') : '';
    }
?>