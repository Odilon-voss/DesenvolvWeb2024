<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Triângulo Retângulo</title>
</head>
<body>
    <form method="post">
        <input type="number" name="base" placeholder="Base (m)" required>
        <input type="number" name="altura" placeholder="Altura (m)" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST['base'];
        $altura = $_POST['altura'];
        $area = ($base * $altura) / 2;
        echo "<p>A área do triângulo de base $base metros e altura $altura metros é $area metros quadrados.</p>";
    }
    ?>
</body>
</html>
