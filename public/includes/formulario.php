<?php
    $mensagemErro = '';
    if(isset($_GET['erro']) && $_GET['erro'] == 'naoCadastrado'){
        $mensagemErro = 'Erro ao cadastrar a tarefa!';
    }
?>

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
        <section class="container col-md-10 text-dark" id="formSection">
            <form action="../../src/controllers/checagemCadastro.php" method="post" class="form bg-light rounded">
                <div class="form-group p-4 pb-2">
                    <label for="descTarefa" class="form-label">Descrição da Tarefa:</label>
                    <input type="text" name="descricao" id="descTarefa" class="form-control">
                    <p class="text-danger m-1"><?=$mensagemErro?></p>
                </div>
                <div class="form-group p-4 pt-2 text-end">
                    <a href="index.php"><input type="button" value="Cancelar" class="btn btn-danger"></a>
                    <input type="submit" name="criar" value="Criar" class="btn btn-success">
                </div>
            </form>
        </section>