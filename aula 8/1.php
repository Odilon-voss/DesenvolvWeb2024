<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Soma de Três Valores</title>
</head>
<body>
    <form method="post">
        <input type="number" name="valor1" placeholder="Valor 1" required>
        <input type="number" name="valor2" placeholder="Valor 2" required>
        <input type="number" name="valor3" placeholder="Valor 3" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        $soma = $valor1 + $valor2 + $valor3;

        if ($valor1 > 10) {
            echo "<p style='color: blue;'>Resultado: $soma</p>";
        } elseif ($valor2 < $valor3) {
            echo "<p style='color: green;'>Resultado: $soma</p>";
        } elseif ($valor3 < $valor1 && $valor3 < $valor2) {
            echo "<p style='color: red;'>Resultado: $soma</p>";
        }
    }
    ?>
</body>
</html>
