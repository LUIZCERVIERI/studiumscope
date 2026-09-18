<div class="card mt-5">
    <div class="card-body">
        <form method="post" action="authController.php?acao=salvar">
            
            <label class="form-label">Nome:</label>
            <input class="form-control" type="text" name="nome"
                   value="<?= $dado["nome"] ?? '' ?>" required autofocus>

            <label class="form-label">E-mail:</label>
            <input class="form-control" type="email" name="email"
                   value="<?= $dado["email"] ?? '' ?>" required autofocus>

            <label class="form-label">Senha:</label>
            <input class="form-control" type="password" name="senha"
                   value="<?= $dado["senha"] ?? '' ?>" required autofocus>

            <button class="btn btn-primary mt-4" type="submit">Salvar</button>
        </form>
    </div>
</div>