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
        $preco = (float)($_GET["preco"] ?? 0);
        $reajuste = (int)($_GET["reaj"] ?? 1);
    ?>
    <main>
        <h1>Reajustador de preço</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get" autocomplete="on">
            <label for="preco">Preço do Produto(R$)</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>" step="0.01">
            <label for="reaj">Qual será o percentual de reajuste <strong>(<span id="p">?</span>%)</strong></label>
            <input type="range" name="reaj" id="reaj" min="1" max="100" step="1" value="<?=$reajuste?>" oninput="MudaValor()">
            <input type="submit" value="Calcular reajuste">
        </form>
    </main>
    <?php 
        $aumento = ($preco/100 * $reajuste);
        $valorFinal = ($preco + $aumento);
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preco,2,",",".")?>, com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=number_format($valorFinal,2,",",".")?></strong> a partir de agora</p>
    </section>
    <script>
        MudaValor()

         function MudaValor(){
            p.innerText = reaj.value
        }
    </script>
</body>
</html>