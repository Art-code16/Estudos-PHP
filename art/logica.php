<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO DA OPERAÇÃO</title>
</head>
<body>
<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacao = $_POST['operacao'];

    switch ($operacao) {
        case '+':
            $resultado = $numero1 + $numero2;
            $operador = '+';
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            $operador = '-';
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            $operador = '*';
            break;
        case '/':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $operador = '/';
            } else {
                $resultado = "Erro: Divisão por zero não é permitida.";
            }
            break;
        default:
            $resultado = "Operação inválida.";
    }
    echo "RESULTADO DA OPERAÇÃO <br> <br>";
    echo "O RESULTADO É {$resultado}";
?>
</body>
</html>