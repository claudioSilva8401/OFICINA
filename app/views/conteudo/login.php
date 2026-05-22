<article class="container-fluid">
    <div class="col-lg-12 ">
        <div class="cadastro">
            <?php
                if (isset($_SESSION['campobranco'])) :
                    ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <p><strong>Alerta:</strong>Algum campo ficou em branco!</p>
                    </div>
                <?php
                endif;
                unset($_SESSION['campobranco']);
                ?>
                <?php
                if (isset($_SESSION['nao_autenticado'])) :
                    ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <p><strong>Erro:</strong>Usuário ou senha inválidos.</p>
                    </div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>
                <h1 class="ls-login-logo teko">Login</h1>
                <form action="op_login.php" method="POST">
                    <fieldset>
                        <label for="userLogin">Usuário</label>
                        <input class="form-control ls-login-bg-user input-lg" id="usuario" name="usuario" type="text" aria-label="Usuário" placeholder="Usuário">
                        <label for="userPassword">Senha</label>
                        <input class="form-control ls-login-bg-password input-lg" id="senha" name="senha" type="password" aria-label="Senha" placeholder="Senha">
                        <input type="submit" value="Entrar" class="btn btn-primary enviar">
                        <p class="txt-center ls-login-signup notable">Não possui uma conta?
                            <a href="sing.php">Faça cadastro aqui!</a>
                        </p>
                    </fieldset>
                </form>
        </div>
    </div>
</article>
<!--Rodapé-->