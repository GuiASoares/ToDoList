<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .text-hover {
            color: #212529;
        }
        .text-hover:hover {
            color: #0D6EFD;
        }
    </style>
    <title>Lista de Tarefas</title>
</head>
<body class="bg-dark text-light">
    <header class="container mt-5 text-center">
        <h1 class="bg-primary rounded-2 p-1">Lista de Tarefas</h1>
    </header>
    <main class="container d-flex mt-5">
        <section class="container bg-light d-flex flex-column rounded fw-bold" style="width: 20%; height: 125px;">
            <a href="../pages/index.php?filtro=pendentes" class="p-2 text-decoration-none text-hover">Tarefas Pendentes</a>
            <a href="../pages/criarTarefa.php" class="p-2 text-decoration-none text-hover">Nova Tarefa</a>
            <a href="../pages/index.php?filtro=" class="p-2 text-decoration-none text-hover">Todas as Tarefas</a>
        </section>