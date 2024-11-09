<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $saque = (int)($_GET["saque"] ?? 0);
        $sobra = $saque;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5">
            <p>*Notas disponiveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $tot100 = (int)($sobra / 100);
        $sobra = $sobra % 100;
        $tot50 = (int)($sobra / 50);
        $sobra = $sobra % 50;
        $tot10 = (int)($sobra / 10);
        $sobra = $sobra % 10;
        $tot5 = (int)($sobra / 5);
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque,2,",",".")?> Realizado</h2>
        <p>O caixa eletrônico vai entregar as seguintes notas:</p>
        <ul>
            <li><img class="nota" src="imagens/100-reais.jpg" alt="Nota de 100">X<?=$tot100?></li>
            <li><img class="nota" src="imagens/50-reais.jpg" alt="Nota de 50">X<?=$tot50?></li>
            <li><img class="nota" src="imagens/10-reais.jpg" alt="Nota de 10">X<?=$tot10?></li>
            <li><img class="nota" src="imagens/5-reais.jpg" alt="Nota de 5">X<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>