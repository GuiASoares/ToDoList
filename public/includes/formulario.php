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