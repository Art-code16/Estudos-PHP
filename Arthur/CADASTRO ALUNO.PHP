<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="author" content="Wanderley Lopes Batista">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Cadastro de Aluno</title>
    <link rel="stylesheet" type="text/css" href="estilo.CSS" />    

</head>

<body>

<br>
<!-- Menu de navegação -->
<ul class="menu">
    <li class="menu-item"><a href="index.html">PÁGINA INICIAL</a></li>
    <li class="menu-item"><a href="CADASTRO_ALUNO.html">CADASTRAR ALUNO</a></li>
</ul>

<br>

<?php
// -------------------------------------------------------------------------
//  Arquivo de conexão com o banco de dados (PDO)
//  Esse arquivo deve conter a variável $conexao com a conexão ativa.
// -------------------------------------------------------------------------
require_once 'conexao.php';

try {
    $resultado = $conexao->query("SHOW TABLES");
    foreach ($resultado as $linha) {
        echo "Tabela encontrada: " . $linha[0] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
// -------------------------------------------------------------------------
//  Verifica se o formulário foi enviado usando o método POST.
//  Isso garante que o código só será executado quando o formulário for enviado.
// -------------------------------------------------------------------------
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ---------------------------------------------------------------------
    //  Captura os valores enviados pelo formulário HTML e armazena nas variáveis.
    // ---------------------------------------------------------------------
    $nome        = trim($_POST['aluno'] ?? '');
    $data_nasc   = $_POST['data_nasc'] ?? null;
    $sexo        = $_POST['sexo'] ?? '';
    $cpf         = trim($_POST['cpf'] ?? '');
    $endereco    = trim($_POST['endereco'] ?? '');
    $complemento = trim($_POST['complemento'] ?? '');
    $bairro      = trim($_POST['bairro'] ?? '');
    $cidade      = trim($_POST['cidade'] ?? '');
    $telefone    = trim($_POST['telefone'] ?? '');

    // ---------------------------------------------------------------------
    //  Início do bloco try/catch para capturar possíveis erros de execução
    //  no momento da inserção no banco de dados.
    // ---------------------------------------------------------------------
    $sql = "INSERT INTO aluno 
        (aluno, data_nasc, sexo, cpf, endereco, complemento, bairro, cidade, telefone)
        VALUES (:aluno, :data_nasc, :sexo, :cpf, :endereco, :complemento, :bairro, :cidade, :telefone)";

$stmt = $conexao->prepare($sql);

$stmt->execute([
    ':aluno' => $nome,
    ':data_nasc' => $data_nasc,
    ':sexo' => $sexo,
    ':cpf' => $cpf,
    ':endereco' => $endereco,
    ':complemento' => $complemento,
    ':bairro' => $bairro,
    ':cidade' => $cidade,
    ':telefone' => $telefone
]);


        // -----------------------------------------------------------------
        //  Executa o comando SQL diretamente com o método exec().
        //  O método exec() é utilizado para comandos que não retornam dados,
        //  como INSERT, UPDATE e DELETE.
        // -----------------------------------------------------------------
        if ($conexao->exec($sql)) {
            echo "Dados inseridos no Banco de Dados com sucesso!<br />";
        } else {
            echo "Erro ao inserir os dados.";
        }

    // ---------------------------------------------------------------------
    //  Captura qualquer exceção lançada durante a execução do SQL.
    //  Exibe a mensagem de erro para facilitar a depuração.
    // ---------------------------------------------------------------------
    } 


// -------------------------------------------------------------------------
//  Fecha a conexão com o banco de dados, liberando os recursos.
// -------------------------------------------------------------------------
$conexao = null;
?>

</body>
</html>