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

        @media(max-width: 600px){
            .lines {
                font-size: 0.8em;
            }

            #table {
                overflow-x: auto;
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
    