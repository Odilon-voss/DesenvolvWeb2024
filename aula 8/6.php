<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Compra do Joãozinho</title>
</head>
<body>
    <form method="post">
        <input type="number" name="macas" placeholder="Maçã (kg)" required>
        <input type="number" name="melancia" placeholder="Melancia (kg)" required>
        <input type="number" name="laranja" placeholder="Laranja (kg)" required>
        <input type="number" name="repolho" placeholder="Repolho (kg)" required>
        <input type="number" name="cenoura" placeholder="Cenoura (kg)" required>
        <input type="number" name="batatinha" placeholder="Batatinha (kg)" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = [
            'macas' => 3,
            'melancia' => 4,
            'laranja' => 2,
            'repolho' => 2.5,
            'cenoura' => 3,
            'batatinha' => 1.5,
        ];

        $quantidade = [
            'macas' => $_POST['macas'],
            'melancia' => $_POST['melancia'],
            'laranja' => $_POST['laranja'],
            'repolho' => $_POST['repolho'],
            'cenoura' => $_POST['cenoura'],
            'batatinha' => $_POST['batatinha'],
        ];

        $gastoTotal = 0;

        foreach ($quantidade as $produto => $kg) {
            $gastoTotal += $preco[$produto] * $kg;
        }

        $dinheiro = 50.00;
        if ($gastoTotal > $dinheiro) {
            $excedente = $gastoTotal - $dinheiro;
            echo "<p style='color: red;'>Falta R$ $excedente para pagar a conta.</p>";
        } elseif ($gastoTotal < $dinheiro) {
            $restante = $dinheiro - $gastoTotal;
            echo "<p style='color: blue;'>Você ainda pode gastar R$ $restante.</p>";
        } else {
            echo "<p style='color: green;'>Saldo para compras esgotado.</p>";
        }
    }
    ?>
</body>
</html>
