<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php

$NOME = $_POST['nome'];
$NASCIMENTO = $_POST['nascimento'];
$EMAIL = $_POST['email'];
$TELEFONE = $_POST['telefone'];
$cadastro = array($NOME, $NASCIMENTO, $EMAIL, $TELEFONE);


echo '<h2>Dados Recebidos:</h2>';
echo 'Seu nome:'.$NOME. '<br>';
echo 'Sua data de nascimento:'.$NASCIMENTO.'<br>';
echo 'Seu email:'.$EMAIL.'<br>';
echo 'Seu telefone:'.$TELEFONE. '<br>';
    ?>
</body>

</html>