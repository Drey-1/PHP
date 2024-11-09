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
        $salario = (int)($_GET["salario"] ?? 0);
        $salarioMin = 1412;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <input type="submit" value="Calcular">
        </form>
        <p>Considerando o salário minimo de <strong>R$<?=number_format($salarioMin, 2, ',', '.')?></strong></p>
    </main>
    <?php 
        $numSalarios = (int)($salario / $salarioMin);
        $resto = $salario % $salarioMin;
    ?>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$<?=number_format($salario, 2, ',', '.')?>, ganha <strong><?=$numSalarios?> salários minimos +</strong> R$<?=number_format($resto, 2, ',', '.')?> </p>
    </section>
</body>
</html>