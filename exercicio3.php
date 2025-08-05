<!-- arquivo: exercicio3.php -->

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivo ou negativo</title>
</head>
<body>

<form method="POST">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero > 0) {
        echo "<p>O número $numero é positivo.</p>";
    } elseif ($numero < 0) {
        echo "<p>O número $numero é negativo.</p>";
    } else {
        echo "<p>O número é zero.</p>";
    }
}
?>
