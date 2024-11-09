<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
        $reais = $_GET["reais"] ?? 0;
        $cotacao = 5.77;
        $dolar = $reais / $cotacao;
        $padrao = numfmt_create("pt-BR" , NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD")  . "</strong></p>";
        ?>
        <p>* <strong>Cotação fixa de R$5,70</strong> informada diretamente no código.</p>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>