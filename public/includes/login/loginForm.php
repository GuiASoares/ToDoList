<?php
    $mensagemErro = '';
    if(isset($_GET['erro']) && $_GET['erro'] == 'invalidos'){
        $mensagemErro = 'Preencha todos os campos corretamente para prosseguir!';
    } else if(isset($_GET['erro']) && $_GET['erro'] == 'naoLogado'){
        $mensagemErro = 'É preciso entrar com sua conta para prosseguir!';
    } else if(isset($_GET['erro']) && $_GET['erro'] == 'naoCadastrado'){
        $mensagemErro = 'E-mail e/ou senha inválido(s)!';
    }
?>

<header class="container text-center mt-5">
    <h1 class="bg-primary rounded-2 p-2">Faça seu login para prosseguir.</h1>
</header>
<main class="container d-flex justify-content-center">
    <div class="card w-50 bg-light rounded mt-3">
        <form action="../../src/controllers/checagemLogin.php" method="post" class="text-dark">
            <h1 class="text-center mt-3">Entrar</h1>
            <div class="card-body">
                <label for="emailInput" class="form-label mt-3">E-mail:</label>
                <input type="email" id="emailInput" class="form-control" name="email" required>
                <label for="senhaInput" class="form-label mt-3">Senha:</label>
                <input type="password" id="senhaInput" class="form-control mb-2" name="senha" required>
                <p class="text-danger m-1"><?=$mensagemErro?></p>
                <input type="submit" value="Entrar" class="btn btn-success mt-3 w-100">
            </div>
            <div class="card-footer p-3">
                <a href="?pag=registerForm" class="m-1">Clique aqui para realizar seu cadastro.</a>
            </div>
        </form>
    </div>
</main>