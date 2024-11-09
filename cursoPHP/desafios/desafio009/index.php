<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 =  $_GET["v1"] ?? "";
        $valor2 =  $_GET["v2"] ?? "";
        $peso1 =  $_GET["p1"] ?? "";
        $peso2 =  $_GET["p2"] ?? "";
    ?>
    <main>
        <h1>Médias Aritiméticas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" required min="1" value="<?=$peso1?>">

            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" required min="1" value="<?=$valor2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" required value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
            
        </form>
    </main>
    <?php 
        $valor1 =  (int)$valor1;
        $valor2 =  (int)$valor2;
        $peso1 =  (int)$peso1;
        $peso2 =  (int)$peso2;

        $MS = ($valor1 + $valor2) / 2;
        if (($peso1 + $peso2) != 0) {
            $MP = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        } else {
            $MP = "Indefinido";
        }

    ?>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Média Aritimética Simples</strong> entre os valores é igual à <?=number_format($MS,2,",",".")?>.</li>
            <li>A <strong>Média Aritimética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual à <?=number_format($MP,2,",",".")?>.</li>
        </ul>
    </section>
</body>
</html>