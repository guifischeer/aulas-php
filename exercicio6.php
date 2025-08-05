<!-- arquivo: exercicio6.php -->

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>

<form method="POST">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Mostrar divisores">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["numero"] !== "") {
    $numero = $_POST["numero"];

    if ($numero > 0) {
        echo "Divisores de $numero: ";

        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo $i . " ";
            }
        }
    }
}
?>
