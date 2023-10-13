<?php 
    $descricao = $_POST['descricao'] ?? '';

    if(!isset($descricao)){
        header('Location: formulario.php?erro=naoInserido');
        exit;
    } else {
        
    }
?>