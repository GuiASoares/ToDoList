<?php
    $mensagemErro = '';
    if(isset($_GET['erro']) && $_GET['erro'] == 'invalidos'){
        $mensagemErro = 'Preencha todos os campos corretamente para prosseguir!';
    } else if(isset($_GET['erro']) && $_GET['erro'] == 'senhasDiferentes'){
        $mensagemErro = 'As senhas inseridas devem ser iguais!';
    } else if(isset($_GET['erro']) && $_GET['erro'] == 'emailCadastrado'){
        $mensagemErro = 'O e-mail inserido já foi cadastrado!';
    }
?>

<header class="container text-center mt-5">
    <h1 class="bg-primary rounded-2 p-2">Faça seu cadastro para prosseguir.</h1>
</header>
<main class="container d-flex justify-content-center">
    <div class="card w-50 bg-light rounded mt-3">
        <form action="../../src/controllers/checagemRegistrar.php" method="post" class="text-dark">
            <h1 class="text-center mt-3">Cadastrar-se</h1>
            <div class="card-body">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" id="nomeInput" class="form-control" name="nome" required>
                <label for="emailInput" class="form-label mt-3">E-mail:</label>
                <input type="email" id="emailInput" class="form-control" name="email" required>
                <label for="senhaInput" class="form-label mt-3">Senha:</label>
                <input type="password" id="senhaInput" class="form-control" name="senha" required>
                <label for="" class="form-label mt-3">Confirme sua senha:</label>
                <input type="password" id="senhaConfirmInput" class="form-control" name="senhaConfirm" required>
                <p class="text-danger m-1"><?=$mensagemErro?></p>
                <input type="submit" value="Cadastrar-se" class="btn btn-success mt-3 w-100">
            </div>
            <div class="card-footer p-3">
                <a href="?pag=loginForm" class="m-1">Se já possuir uma conta, clique aqui para fazer o login.</a>
            </div>
        </form>
    </div>
</main>