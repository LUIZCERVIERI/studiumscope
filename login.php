<div class="card mt-5">
    <div class="card-body">
        <form method="post" action="authController.php?acao=login">

            <label class="form-label">E-mail:</label>
            <input class="form-control" type="email" name="email"
                   value="<?= $dado["email"] ?? '' ?>" required autofocus>

            <label class="form-label">Senha:</label>
            <input class="form-control" type="password" name="senha"
                   value="<?= $dado["senha"] ?? '' ?>" required autofocus>

            <a class="btn btn-link mt-4" href="authController.php?acao=cadastrar" >Cadastrar</a>
            <button class="btn btn-primary mt-4" type="submit">Entrar</button>
        </form>
    </div>
</div>