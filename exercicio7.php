<!-- arquivo: exercicio7.php -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero maior</title>
</head>
<body>

<form method="POST">
    Nnmero 1: <input type="number" name="num1">
    numero 2: <input type="number" name="num2">
    numero 3: <input type="number" name="num3">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];

    $maior = $num1;

    if ($num2 > $maior) {
        $maior = $num2;
    }

    if ($num3 > $maior) {
        $maior = $num3;
    }

    echo "O maior número é: $maior";
}
?>
