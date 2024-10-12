<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Parcelas da Moto</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="Calcular Parcelas">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorVista = 8654.00;
        $parcelas = [24, 36, 48, 60];
        $taxaInicial = 1.5 / 100; // 1.5%

        foreach ($parcelas as $index => $n) {
            $taxa = $taxaInicial + ($index * 0.005); // aumento de 0.5%
            $montante = $valorVista * (1 + $taxa * $n);
            $parcela = $montante / $n;
            echo "<p>Parcelas em $n vezes: R$ " . number_format($parcela, 2, ',', '.') . "</p>";
        }
    }
    ?>
</body>
</html>
