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

        #table::-webkit-scrollbar-track {
            background-color: transparent;
        }

        #table::-webkit-scrollbar {
            width: 10px;
            height: 5px;
            background: transparent;
        }

        #table::-webkit-scrollbar-thumb {
            background: #dad7d7;
            border-radius: 10px;
        }

        .lines + .lines{
            border-top: solid 1px rgba(200, 200, 200);
        }

        #table {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: hidden;
        }

        #formContainer {
            width: 60%;
        }

        @media(max-width: 600px){
            .lines {
                font-size: 0.8em;
            }

            #table {
                overflow-x: auto;
            }

            #formContainer {
                width: 100%;
            }
        }

        @media(max-width: 450px){
            .lines {
                font-size: 0.6em;
            }

            #tableTitle {
                font-size: 0.7em;
            }
        }
    </style>
    <title>Lista de Tarefas</title>
</head>
<body class="bg-dark text-light">
    
<?php if(isset($_SESSION['nome'], $_SESSION['id'])){ ?>
    <header class="container mt-5 text-center d-flex justify-content-end">
            <h1 class="bg-primary rounded-start-2 p-1 w-100 m-0" style="z-index: 1;">Lista de Tarefas</h1>
            <div style="width: 10%;">
                <button class="btn btn-secondary h-100 w-100" style="border-radius: 0px 5px 5px 0px;" data-bs-toggle="modal" data-bs-target="#confirmacaoLogout">Sair</button>
            </div>

            <div class="modal fade text-dark" id="confirmacaoLogout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Sair?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="text-start m-0">Deseja realmente sair?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <a href="../../src/controllers/checagemLogout.php"><button type="button" class="btn btn-primary">Sim</button></a>
                        </div>
                    </div>
                </div>
            </div>
    </header>
<?php } ?>
        