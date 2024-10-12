<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Financiamento do Carro</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="Calcular Juros">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorVista = 22500.00;
        $parcelas = 60;
        $valorParcela = 489.65;
        $valorTotal = $valorParcela * $parcelas;

        $juros = $valorTotal - $valorVista;
        echo "<p>O valor gasto em juros foi de R$ $juros.</p>";
    }
    ?>
</body>
</html>
