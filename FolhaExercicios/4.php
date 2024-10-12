<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Retângulo</title>
</head>
<body>
    <form method="post">
        <input type="number" name="ladoA" placeholder="Lado A (m)" required>
        <input type="number" name="ladoB" placeholder="Lado B (m)" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ladoA = $_POST['ladoA'];
        $ladoB = $_POST['ladoB'];
        $area = $ladoA * $ladoB;

        if ($area > 10) {
            echo "<h1>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h1>";
        } else {
            echo "<h3>A área do retângulo de lados $ladoA e $ladoB metros é $area metros quadrados.</h3>";
        }
    }
    ?>
</body>
</html>
