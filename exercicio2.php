<!-- arquivo: exercicio2.php -->

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>

<form method="POST">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$numero=$_POST ['numero'];

for($contador=1; $contador<=10; $contador++){

    $resultado = $numero*$contador;
    echo $numero. " x " . $contador. " = ". $resultado;
}
}




?>