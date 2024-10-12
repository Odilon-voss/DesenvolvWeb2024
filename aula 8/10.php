
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Arvore Recursiva</title>
</head>
<body>

    <?php
    $aArray = ['bsn' => ['3a fase' => ['desenvWeb', 'bancoDados 1', 'engSoft 1'],
    '4a Fase' => ['Intro Web', 'bancoDados 2', 'engSoftware']]];

        function imprimir($iValor, $iCamada) {
        foreach($iValor as $sChave => $xValor) {
        if(is_array($xValor)) {
        if (!empty($xValor)) {
        echo str_repeat('-', $iCamada).$sChave."<br>";
        imprimir($xValor, $iCamada+1);
        }
        } else {
        if (!empty($xValor)) {
        echo str_repeat('-', $iCamada).$xValor."<br>";
        }
        }
        }
        }

echo imprimir($aArray, 1);
    ?>
</body>
</html>