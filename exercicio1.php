<!-- arquivo: exercicio1.php -->

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impar ou par</title>
</head>
<body>

<form method="POST">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<p>O número $numero é par</p>";
    } else {
        echo "<p>O número $numero é ímpar</p>";
    }
}
?>
