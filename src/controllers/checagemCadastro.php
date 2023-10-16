<?php
    require("../../vendor/autoload.php");
    
    use Src\Entity\Tarefa;

    $descricao = $_POST['descricao'] ?? '';

    if(!isset($descricao)){
        header('Location: formulario.php?erro=naoInserido');
        exit;
    } else {
        $tarefa = new Tarefa($descricao);
        $cadastro = $tarefa->cadastrar($descricao);
        echo $cadastro ? 'Sucesso' : 'Fracasso';
    }
?>