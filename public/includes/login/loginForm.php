<header class="container text-center mt-5">
    <h1 class="bg-primary rounded-2 p-2">Faça seu login para prosseguir.</h1>
</header>
<main class="container d-flex justify-content-center">
    <div class="card w-50 bg-light rounded mt-3">
        <form action="../../src/controllers/checagemLogin.php" method="post" class="text-dark">
            <h1 class="text-center mt-3">Entrar</h1>
            <div class="card-body">
                <label for="nomeInput" class="form-label">Nome:</label>
                <input type="text" id="nomeInput" class="form-control" name="nome" required>
                <label for="emailInput" class="form-label mt-3">E-mail:</label>
                <input type="email" id="emailInput" class="form-control" name="email" required>
                <label for="senhaInput" class="form-label mt-3">Senha:</label>
                <input type="password" id="senhaInput" class="form-control mb-2" name="senha" required>
                <input type="submit" value="Entrar" class="btn btn-success mt-3 w-100">
            </div>
            <div class="card-footer p-3">
                <a href="?pag=registerForm" class="m-1">Clique aqui para realizar seu cadastro.</a>
            </div>
        </form>
    </div>
</main>