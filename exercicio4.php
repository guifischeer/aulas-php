<!-- arquivo: exercicio4.php -->

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
<form method="POST">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Calcular Fatorial">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["numero"] !== "") {
    $numero = $_POST["numero"];

    if ($numero >= 0) {
        $fatorial = 1;
        for ($i = $numero; $i >= 1; $i--) {
            $fatorial *= $i;
        }
        echo "Fatorial de $numero: $fatorial";
    }
}
?>


