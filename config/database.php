<?php
    $host="localhost";
    $usuario="root";
    $senha="";
    $banco="lnm";

    $conexao = mysqli_connect($host, $usuario, $senha) or die ("Não foi possivel fazer a conexão com o servidor");
    mysqli_select_db($conexao,$banco) or die ("Não foi possível fazer a conexão com o banco de dados");
    // nome da tabela
$tabela = "user";

// verifica se a tabela existe
$sql_verifica = "SHOW TABLES LIKE '$tabela'";
$resultado = mysqli_query($conexao, $sql_verifica);

if (mysqli_num_rows($resultado) == 0) {

    // cria a tabela se não existir
    $sql="CREATE TABLE IF NOT EXISTS user(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_nome VARCHAR(50) NOT NULL,
    user_senha VARCHAR(50) NOT NULL,
    user_nick VARCHAR(50) NOT NULL UNIQUE,
    user_email VARCHAR(50) DEFAULT 'Atualize o email',
    user_fone VARCHAR(20) DEFAULT 'Atualize o telefone',
    user_data DATETIME ,
    user_admin INT DEFAULT '0',
    user_ativo INT DEFAULT '1'
    );";

    if (mysqli_query($conexao, $sql)) {
        echo "Tabela '$tabela' criada com sucesso!";
    } else {
        echo "Erro ao criar tabela: " . mysqli_error($conexao);
    }
    // cria a tabela se não existir
    $sql="CREATE TABLE IF NOT EXISTS endereco(
    end_id INT PRIMARY KEY AUTO_INCREMENT,
    end_rua VARCHAR(50) DEFAULT'ATUALIZAR ENDEREÇO',
    end_numero VARCHAR(50) DEFAULT'000',
    end_bairro VARCHAR(50) DEFAULT'BAIRRO',
    end_cidade VARCHAR(50) DEFAULT'CIDADE',
    end_estado VARCHAR(50) DEFAULT'ESTADO',
    end_cep VARCHAR(50) DEFAULT'99.999-999',
    end_ativo INT DEFAULT '1',
    end_user INT,
    CONSTRAINT 
    FOREIGN KEY(end_user) 
    REFERENCES 
    user(user_id)
    );";

    if (mysqli_query($conexao, $sql)) {
        echo "Tabela '$tabela' criada com sucesso!";
    } else {
        echo "Erro ao criar tabela: " . mysqli_error($conexao);
    }

} 

?>