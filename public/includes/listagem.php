        <section class="container m-5 text-dark fs-5" style="width: 80%;">
            <div class="row bg-light text-center rounded-top">
                <div class="col-4">
                    <p class="fw-bold m-1">Descrição</p>
                </div>
                <div class="col-4">
                    <p class="fw-bold m-1">Data</p>
                </div>
                <div class="col-4">
                    <p class="fw-bold m-1">Ações</p>
                </div>
            </div>

            <?php
                $tarefasLenght = count($tarefas);
                $contador = 1;
                foreach($tarefas as $tarefa){
                    $tarefa['data'] = date('d/m/Y H:i:s', strtotime($tarefa['data']))
            ?>

            <div class="row bg-light text-center <?php echo $contador == $tarefasLenght ? 'rounded-bottom' : '';?>">
                <div class="col-4">
                    <p class="m-1"><?=$tarefa['descricao']?></p>
                </div>
                <div class="col-4">
                    <p class="m-1"><?=$tarefa['data']?></p>
                </div>
                <div class="col-4">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-square-fill text-success" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <?php $contador++; } ?>
        </section>