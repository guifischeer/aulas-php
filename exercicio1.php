<!-- arquivo: exercicio1.php -->
<form method="POST">
    Digite um número: <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<p>O número $numero é <strong>par</strong>.</p>";
    } else {
        echo "<p>O número $numero é <strong>ímpar</strong>.</p>";
    }
}
?>
