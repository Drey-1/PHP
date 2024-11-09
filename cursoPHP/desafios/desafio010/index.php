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
        $atual = date("Y");
        $nascimento = $_GET["nasc"] ?? 2000;
        $anoFuturo = $_GET["anoF"] ?? $atual;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" required value="<?=$nascimento?>" max="<?=$atual?>">

            <label for="anoF">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="anoF" id="anoF" required value="<?=$anoFuturo?>" min="<?=$nascimento?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>
            <?php 
            $idadeFutura = (int) $anoFuturo - (int)$nascimento;
            if ($idadeFutura == 1){
                $idadeFutura = $idadeFutura . " ano";
            } else {
                $idadeFutura = $idadeFutura . " anos";
            }
            echo "Quem nasceu em $nascimento vai ter <strong>$idadeFutura</strong> em $anoFuturo!";
            ?>
        </p>
    </section>
</body>
</html>