<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ano bissexto ou não</title>
</head>
<body>

<form method="POST">
    Digite um ano: <input type="number" name="ano">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["ano"] !== "") {
    $ano = $_POST["ano"];

    if (($ano % 400 == 0) || (($ano % 4 == 0) && ($ano % 100 != 0))) {
        echo "O ano $ano é bissexto.";
    } else {
        echo "O ano $ano não é bissexto.";
    }
}
?>
