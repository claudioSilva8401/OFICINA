<!-- Modal Endereço-->
<div class="modal fade" id="dados_end" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Atualizar endereço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="op_end.php" method="POST">
            <fieldset>
                <label for="userLogin">Rua/AV:</label>
                <input class="form-control ls-login-bg-user input-lg" id="rua" name="rua" type="text"placeholder="Rua/Av"required>
                <label for="userLogin">Numero</label>
                <input class="form-control ls-login-bg-user input-lg" id="numero" name="num" type="text"  placeholder="Nº"required>
                <label for="userPassword">Bairro</label>
                <input class="form-control ls-login-bg-password input-lg" id="bairro" name="bairro" type="text" placeholder="Bairro"required>
                <label for="userPassword">Cidade</label>
                <input class="form-control ls-login-bg-password input-lg" id="cidade" name="cidade" type="text" placeholder="Cidade"required>
                <label for="userPassword">Estado</label>
                <input class="form-control ls-login-bg-password input-lg" id="estado" name="estado" type="text" placeholder="Estado"required>
                <label for="userPassword">CEP</label>
                <input class="form-control ls-login-bg-password input-lg" id="cep" name="cep" type="text" placeholder="CEP"required>
                <input type="hidden" name="acao" value="1">
                <input type="submit" value="Alterar" class="btn btn-primary enviar">
            </fieldset>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
    </div>
  </div>
</div>
<!--Modal dos Dados-->
<div class="modal fade" id="dados" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1>Atualizar endereço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="op_end.php" method="POST">
            <fieldset>
                <label for="userLogin">Nome</label>
                <input class="form-control ls-login-bg-user input-lg" id="nome" name="nome" type="text" aria-label="Nome" placeholder="Nome" required>
                <label for="userLogin">Usuário</label>
                <input class="form-control ls-login-bg-user input-lg" id="usuario" name="usuario" type="text" aria-label="Usuário" placeholder="Usuário"required>
                <label for="userLogin">Email</label>
                <input class="form-control ls-login-bg-user input-lg" id="nome" name="email" type="mail" aria-label="email" placeholder="Email"required>
                <label for="userLogin">Telefone</label>
                <input class="form-control ls-login-bg-user input-lg" id="usuario" name="fone" type="text" aria-label="fone" placeholder="Telefone"required>
                <input type="hidden" name="acao" value="2">
                <input type="submit" value="Alterar" class="btn btn-primary enviar">
            </fieldset>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
    </div>
  </div>
</div>