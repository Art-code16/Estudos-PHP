<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<link rel="stylesheet" type="text/css" href="Estilo.css">
<body>
    <ul class="menu_php">
        <li class="menu-item"><a href="Index.html">PÁGINA INICIAL</a></li>
        <li class="menu-item"><a href="Cadastro_aluno.html">CADASTRO DO ALUNO</a></li>
    </ul>
<?php
    require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = $_POST['aluno'];
    $nascimento = $_POST['data'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $complemento = $_POST['complemento'];
    $cep = $_POST['cep'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone']

} catch(PDOException $e){
    echo "Erro ao inserir os dados"
}

try{
    $sql = "INSERT INTO aluno"
    (nome, nascimento, sexo, endereco, complemento, cep, bairro, cidade, estado, telefone)

    VALUES(
        '$nome',
        '$nascimento',
        '$endereco',
        '$complemento',
        '$cep',
        '$cidade',
        '$estado',
        '$telefone',
    );

if ($conexao->exec($sql)){
    echo "Dados inseridos com sucesso"
} 
else {
    echo "Erro ao inserir os dados no banco de dados"
}

catch(PDOException $e){
    echo "Erro ao inserir dados:". $e->getMessage();
}

}
?>
</body>
</html>