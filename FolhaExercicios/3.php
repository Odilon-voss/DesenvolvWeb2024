<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Área do Quadrado</title>
</head>
<body>
    <form method="post">
        <input type="number" name="lado" placeholder="Comprimento do lado (m)" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST['lado'];
        $area = $lado * $lado;
        echo "<p>A área do quadrado de lado $lado metros é $area metros quadrados</p>";
    }
    ?>
</body>
</html>
