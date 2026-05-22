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
                if (isset($_SESSION['usuario_existe'])) :
                    ?>
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <p><strong>O usuário escolhido já existe!</strong><br>Informe outro e tente novamente!</p>
                    </div>
                <?php
                endif;
                unset($_SESSION['usuario_existe']);
                ?>
                <?php
                if (isset($_SESSION['status_cadastro'])) :
                    ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <p><strong>Cadastro efetuado!</strong><br>Faça login informando seu usuário e senha <a href="login.php" class="alert-link">aqui.</a></p>
                    </div>
                <?php
                endif;
                unset($_SESSION['status_cadastro']);
                ?>
                <h1 class="ls-login-logo teko">Cadastro</h1>
                <form action="op_user.php" method="POST">
                    <fieldset>
                        <label for="userLogin">Nome</label>
                        <input class="form-control ls-login-bg-user input-lg" id="nome" name="nome" type="text" aria-label="Nome" placeholder="Nome">
                        <label for="userLogin">Usuário</label>
                        <input class="form-control ls-login-bg-user input-lg" id="usuario" name="usuario" type="text" aria-label="Usuário" placeholder="Usuário">
                        <label for="userPassword">Senha</label>
                        <input class="form-control ls-login-bg-password input-lg" id="senha" name="senha" type="password" aria-label="Senha" placeholder="Senha">
                        <input type="hidden" id="admin" name="admin" value='0' />
                        <input type="submit" value="Entrar" class="btn btn-primary enviar">
                        <p class="txt-center ls-login-signup notable">Já possui uma conta?
                            <a href="login.php">Faça login aqui!</a>
                        </p>
                    </fieldset>
                </form>
        </div>
    </div>
</article>
<!--Rodapé-->