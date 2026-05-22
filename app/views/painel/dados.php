<?php include "painel/sql_dados.php" ?>
<h1 class="ls-login-logo notable center titulomm">Seus dados</h1>
<div class="dados">
<?php 
$id=$_SESSION['usuarioId'];
$usuario = $_SESSION['usuario'];
//verifica se há endereço cadastrado
$sql = "select count(*) as total from endereco where end_user = '$id' and end_ativo='1'";
$result = mysqli_query($conexao, $sql);//roda o sql no banco
$row = mysqli_fetch_assoc($result);//conta quantas linhas foram encontradas

//busca as informações do usuario no banco
$sql ="SELECT * FROM usuario
LEFT JOIN endereco ON(usuario.id_user = endereco.end_user) 
WHERE user_nick = '$usuario'";
$query = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($query);
?>
<span class="dado">
    <p><b>Nome do Usuario :</b>
    <?php echo "$linha[user_nome]"; ?></p>
</span>
<span class="dado">
    <p><b>Usuario de Acesso :</b>
    <?php echo "$linha[user_nick]"; ?></p>
</span>
<span class="dado">
    <p><b>Email :</b>
    <?php echo "$linha[user_email]"; ?></p>
</span>
<span class="dado">
    <p><b>Telefone :</b>
    <?php echo "$linha[user_fone]"; ?></p>
</span>
<button style="background:green; color:#fff;" type="button" class="btn btn-default bot" data-bs-toggle="modal" data-bs-target="#dados">Alterar dados</button>
<?php
if($row['total'] == 0 ) { //se não holver endereço cadastrado ou ativo 
?>
    <h3>Endereço não Cadastrado</h3>
    <button style="background:green; color:#fff;" type="button" class="btn btn-default bot" data-toggle="modal" data-target="#<?php echo "$linha[id_user]"; ?>_dados">Cadastar Endereco</button>
                
<?php } 
else{//se holver endereço?>
<h4>Endereço</h4>
<span class="dado">
    <p><b>Rua/Av: </b>
    <?php echo "$linha[end_rua]"; ?>, nº: 
    <?php echo "$linha[end_numero]"; ?><br>
    <?php echo "$linha[end_cidade]"; ?>,
    <?php echo "$linha[end_estado]"; ?>, <b>CEP:</b>
    <?php echo "$linha[end_cep]"; ?></p>
</span>
    <button style="background:green; color:#fff;" type="button" class="btn btn-default bot" data-bs-toggle="modal" data-bs-target="#dados_end">Alterar Endereço</button>
<?php }
include "painel/modal_dados.php";?>
</div><!-- listagem -->
