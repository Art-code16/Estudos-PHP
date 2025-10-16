<!DOCTYPE html>
<html lang="pt">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Picão</title>

</head>
<body>

<?php
$pizza = $_POST['tipo_pizza'];
$tamanho = $_POST['tamanho_pizza'];
$refrigerante = $_POST['refri'];

echo'####### PIZZARIA DO PICÃO #######<br>';
echo '*** PREZADO(A) CLIENTE, CONFIRA SEU PEDIDO***<br><br>';
echo '______________________________________________________________________________<br><br>';
echo 'Pizza: ' . $pizza . '<br>';
echo 'Tamanho: ' . $tamanho . '<br>';
echo 'Refrigerante: ' . $refrigerante . '<br><br>';
echo '______________________________________________________________________________<br><br>';

if ($tamanho == 'Pequena') {
    $preco = 39.90;
} elseif ($tamanho == 'Média') {
    $preco = 59.90;
} elseif ($tamanho == 'Grande') {
    $preco = 79.90;
} else {
    $preco = 0.00;
}

if ($refrigerante == 'Coca-Cola') {
    $preco_refri = 17.45;
} elseif ($refrigerante == 'Sprite') {
    $preco_refri = 10.95;
} elseif ($refrigerante == 'Fanta') {
    $preco_refri = 9.90;
} else {
    $preco_refri = 0.00;
}
$total = $preco + $preco_refri;
?>
</body>
</html>