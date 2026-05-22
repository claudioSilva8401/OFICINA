<article class="container=fluid">
    <h2>Painel do Usuario</h2>
    <div class="row">
        <div class="col-lg-2 ">
        <?php include "painel/aside_painel.php"; //menu ADMs ?>
        </div><!--col-4-->
        <div class="col-lg-10 ">
            <div class="tab-content">
                <div class="abas " id="tab1">
                <h2 class="ls-login-logo notable center titulomm">Seja bem-vindo(a) <?php echo $_SESSION['usuarioNome']; ?>!</h2>
                    <p class="mini">É aqui onde você poderá acompanhar seus eletronicos na nossa loja, seja seu celular que está com a tela quebrada, seu computador para formatar, seu notebook para trocar o teclado, ou seu tablet com a bateria viciada!</p>
                </div>
                <div class="abas" id="tab2">
                    <p>tab 2</p>
                    <?php //include "painel/abertos.php" ;//servicos abertos ?>
                </div>
                <div class="abas" id="tab3">
                    <?php //include "painel/admins.php"; //cadastro ADMs ?>
                    <p>tab 3</p>
                </div>
                <div class="abas" id="tab4">
                    <?php include "painel/dados.php"; //dados ADMs ?>
                </div>
            </div>
        </div><!--col-8-->
    </div><!--row-->
</article>