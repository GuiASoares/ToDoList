<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous" defer></script>
    <style>
        .text-hover {
            color: #212529;
        }

        .text-hover:hover {
            color: #0D6EFD;
        }

        .btns:hover {
            filter: brightness(0.9);
        }

        ::-webkit-scrollbar-track {
            background-color: transparent;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #dad7d7;
            border-radius: 10px;
        }

        .lines + .lines{
            border-top: solid 1px rgba(200, 200, 200);
        }
    </style>
    <title>Lista de Tarefas</title>
</head>

<body class="bg-dark text-light">
    <header class="container mt-5 text-center">
        <h1 class="bg-primary rounded-2 p-1">Lista de Tarefas</h1>
    </header>
    <main class="container d-flex mt-5" style="gap:20px;">
        <section class="container bg-light d-flex flex-column rounded fw-bold" style="width: 20%; height:min-content;">
            <a href="../pages/index.php?filtro=" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == '' ? 'color: #0D6EFD;' : ''; ?>">Todas as Tarefas</a>
            <a href="../pages/index.php?filtro=pendentes" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == 'pendentes' ? 'color: #0D6EFD;' : ''; ?>">Tarefas Pendentes</a>
            <a href="../pages/index.php?filtro=concluidos" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == 'concluidos' ? 'color: #0D6EFD;' : ''; ?>">Tarefas Concluídas</a>
            <a href="../pages/criarTarefa.php" class="p-2 text-decoration-none text-hover" style="<?php echo !isset($filtro) ? 'color: #0D6EFD;' : ''; ?>">Nova Tarefa</a>
        </section>