<main class="container d-flex mt-5" style="gap:20px;">
    <div class="row w-100 m-0">
        <div class="col-md-2">
            <section class="bg-light d-flex flex-column rounded fw-bold mb-3" style="height:min-content;">
                <a href="../pages/mainPage.php?filtro=" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == '' ? 'color: #0D6EFD;' : ''; ?>">Todas as Tarefas</a>
                <a href="../pages/mainPage.php?filtro=pendentes" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == 'pendentes' ? 'color: #0D6EFD;' : ''; ?>">Tarefas Pendentes</a>
                <a href="../pages/mainPage.php?filtro=concluidos" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == 'concluidos' ? 'color: #0D6EFD;' : ''; ?>">Tarefas Concluídas</a>
                <a href="../pages/criarTarefa.php" class="p-2 text-decoration-none text-hover" style="<?php echo !isset($filtro) ? 'color: #0D6EFD;' : ''; ?>">Nova Tarefa</a>
            </section>
        </div>    
        <div class="col-md-10">
            <section class="text-dark bg-light pb-1 fs-5 rounded" style="height:min-content;">

                <?php
                    $tarefasLenght = count($tarefas);
                    if($filtro == 'pendentes'){
                        $mensagemNenhumaTarefa = ' pendente!';
                    } else if($filtro == 'concluidos'){
                        $mensagemNenhumaTarefa = ' concluída!';
                    } else {
                        $mensagemNenhumaTarefa = '!';
                    }
                    if($tarefasLenght == 0){?>

                        <div class="text-center">
                            <p class="fw-bold p-2 m-0">Você não possui nenhuma tarefa<?=$mensagemNenhumaTarefa?></p>
                        </div>

                    <?php } else {?>

                    <div class="row text-center" id="tableTitle">
                        <div class="col-4">
                            <p class="fw-bold m-1">Descrição</p>
                        </div>
                        <div class="col-4">
                            <p class="fw-bold m-1">Data</p>
                        </div>
                        <div class="col-3">
                            <p class="fw-bold m-1">Ações</p>
                        </div>
                    </div>
                    <div id="table">

                    <?php
                        foreach($tarefas as $tarefa){
                            $tarefa['data'] = date('d/m/Y H:i:s', strtotime($tarefa['data']));
                    ?>

                    <div class="row d-flex align-items-center text-center lines" style="margin-right: 0; flex-wrap: nowrap;">
                        <div class="col-4">
                            <p class="m-1"><?=$tarefa['descricao']?></p>
                        </div>
                        <div class="col-4">
                            <p class="m-1"><?=$tarefa['data']?></p>
                        </div>
                        <div class="col-3 d-flex justify-content-center" style="gap: 5px;">

                            <?php if($tarefa['situacao'] == 'pendente'){?>

                            <a href="../../src/controllers/checagemConcluirTarefa.php?id=<?=$tarefa['id']?>&filtro=<?=$filtro?>" class="d-flex align-items-center btns">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-square-fill text-success" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                                </svg>
                            </a>
                            
                            <a href="" class="d-flex align-items-center btns" data-bs-toggle="modal" data-bs-target="#atualizarModal<?=$tarefa['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-fill bg-warning p-1 rounded-1 text-light" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </a>
                            <div class="modal fade" id="atualizarModal<?=$tarefa['id']?>" data-bs-backdrop="static" data-bs-keyboard="false">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2 class="modal-title ts-5">Editar Tarefa</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="../../src/controllers/checagemAtualizarTarefa.php" method="post" class="form container">
                                                <input type="hidden" name="id" value="<?=$tarefa['id']?>">
                                                <div class="form-group pt-4 pb-2">
                                                    <label for="descricaoTarefa" class="form-label text-start" style="width: 100%;">Escreva a nova descrição da tarefa:</label>
                                                    <input type="text" name="descricao" class="form-control" id="descricaoTarefa">
                                                </div>
                                                <div class="text-end">
                                                    <input type="submit" value="Atualizar" class="btn btn-success mt-3 pr-4">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="" class="d-flex align-items-center btns" data-bs-toggle="modal" data-bs-target="#excluirModal<?=$tarefa['id']?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-square-fill text-danger" viewBox="0 0 16 16">
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                            </a>
                            <div class="modal fade" id="excluirModal<?=$tarefa['id']?>" tabindex="-1" aria-labelledby="exempleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalLabel">Excluir Tarefa</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-start m-0">Deseja excluir essa tarefa?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                            <a href="../../src/controllers/checagemExcluirTarefa.php?filtro=<?=$filtro?>&id=<?=$tarefa['id']?>"><button type="button" class="btn btn-primary">Sim</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } else { ?>

                                <p class="m-1 text-secondary">Concluída</p>
                                </div>
                                <div class="col-1 text-center">
                                    <a href="../../src/controllers/checagemExcluirTarefa.php?filtro=<?=$filtro?>&id=<?=$tarefa['id']?>"><button type="button" class="btn-close"></button></a>

                                <?php } ?>

                            </div>
                    </div>

                    <?php }} ?>

                </div>
            </section>
        </div>