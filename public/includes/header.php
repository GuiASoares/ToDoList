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

        td {
            vertical-align: middle;
        }

        @media(max-width: 800px){
            .lines {
                font-size: 0.8em;
            }

            #table {
                overflow-x: auto;
            }

            #formContainer {
                width: 90%;
            }
        }

        @media(max-width: 450px){
            .lines {
                font-size: 0.6em;
            }

            #tableTitle {
                font-size: 0.7em;
            }

            #sairText {
                display: none;
            }

            .btns svg {
                width: 16px;
                height: 16px;
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
                <button class="btn btn-outline-primary h-100 w-100 d-flex justify-content-center align-items-center text-light p-1" style="border-radius: 0px 5px 5px 0px; gap:3px;" data-bs-toggle="modal" data-bs-target="#confirmacaoLogout">
                    <p id="sairText" class="m-0">Sair</p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 0 640 512" id="svgSair"><style>#svgSair{fill:#ffffff}</style><path d="M208 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zM123.7 200.5c1-.4 1.9-.8 2.9-1.2l-16.9 63.5c-5.6 21.1-.1 43.6 14.7 59.7l70.7 77.1 22 88.1c4.3 17.1 21.7 27.6 38.8 23.3s27.6-21.7 23.3-38.8l-23-92.1c-1.9-7.8-5.8-14.9-11.2-20.8l-49.5-54 19.3-65.5 9.6 23c4.4 10.6 12.5 19.3 22.8 24.5l26.7 13.3c15.8 7.9 35 1.5 42.9-14.3s1.5-35-14.3-42.9L281 232.7l-15.3-36.8C248.5 154.8 208.3 128 163.7 128c-22.8 0-45.3 4.8-66.1 14l-8 3.5c-32.9 14.6-58.1 42.4-69.4 76.5l-2.6 7.8c-5.6 16.8 3.5 34.9 20.2 40.5s34.9-3.5 40.5-20.2l2.6-7.8c5.7-17.1 18.3-30.9 34.7-38.2l8-3.5zm-30 135.1L68.7 398 9.4 457.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L116.3 441c4.6-4.6 8.2-10.1 10.6-16.1l14.5-36.2-40.7-44.4c-2.5-2.7-4.8-5.6-7-8.6zM550.6 153.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L530.7 224H384c-17.7 0-32 14.3-32 32s14.3 32 32 32H530.7l-25.4 25.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l80-80c12.5-12.5 12.5-32.8 0-45.3l-80-80z"/></svg>
                </button>
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
        