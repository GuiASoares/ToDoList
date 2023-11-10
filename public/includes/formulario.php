<header class="container mt-5 text-center">
        <h1 class="bg-primary rounded-2 p-1">Lista de Tarefas</h1>
</header>
<main class="container d-flex mt-5" style="gap:20px;">
    <div class="row w-100 m-0">
        <div class="col-md-2">
            <section class="bg-light d-flex flex-column rounded fw-bold mb-3" style="height:min-content;">
                <a href="../pages/index.php?filtro=" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == '' ? 'color: #0D6EFD;' : ''; ?>">Todas as Tarefas</a>
                <a href="../pages/index.php?filtro=pendentes" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == 'pendentes' ? 'color: #0D6EFD;' : ''; ?>">Tarefas Pendentes</a>
                <a href="../pages/index.php?filtro=concluidos" class="p-2 text-decoration-none text-hover" style="<?php echo $filtro == 'concluidos' ? 'color: #0D6EFD;' : ''; ?>">Tarefas Concluídas</a>
                <a href="../pages/criarTarefa.php" class="p-2 text-decoration-none text-hover" style="<?php echo !isset($filtro) ? 'color: #0D6EFD;' : ''; ?>">Nova Tarefa</a>
            </section>
        </div>
        <section class=" container ml-5 text-dark" style="width: 80%;">
            <form action="" method="post" class="form bg-light rounded">
                <div class="form-group p-4 pb-2">
                    <label for="descTarefa" class="form-label">Descrição da Tarefa:</label>
                    <input type="text" name="descricao" id="descTarefa" class="form-control">
                </div>
                <div class="form-group p-4 pt-2 text-end">
                    <a href="index.php"><input type="button" value="Cancelar" class="btn btn-danger"></a>
                    <input type="submit" name="criar" value="Criar" class="btn btn-success">
                </div>

            <?php
                if(isset($_POST['criar'], $_POST['descricao'])){
                    sleep(0.7);
                    header('Location: ../../src/controllers/checagemCadastro.php?descricao='.$_POST['descricao']);
                    exit;
                }
            ?>
            
        </form>
    </section>