<?php 
$sql="CREATE TABLE IF NOT EXISTS user(
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    user_nome VARCHAR(50) NOT NULL,
    user_senha VARCHAR(50) NOT NULL,
    user_nick VARCHAR(50) NOT NULL UNIQUE,
    user_email VARCHAR(50) DEFAULT 'Atualize o email',
    user_fone VARCHAR(20) DEFAULT 'Atualize o telefone',
    user_data DATETIME ,
    user_admin INT DEFAULT '0',
    user_ativo INT DEFAULT '1'
);
";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_banco'] = true;
}
?>