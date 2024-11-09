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
        $num = (int)($_GET["num"] ?? 0);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="num">Número:</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
     
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        //Conta
        $rq = $num ** (1/2);
        $rc = $num ** (1/3);

        //Amostra
        echo "<p>Analisando o <strong>número $num<strong>, temos:</p>";
        echo "<ul>";
        echo "<li>A sua raiz quadrada é: <strong>".number_format($rq,3,",",".")."</strong>";
        echo "<li>A sua raiz cubica é: <strong>".number_format($rc,3,",",".")."</strong>";
        echo "</ul>";
        ?>
    </section>
</body>
</html>