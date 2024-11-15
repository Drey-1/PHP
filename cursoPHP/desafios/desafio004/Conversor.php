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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 

        $inicio = date("m,d,Y",strtotime("-7 days"));
        $fim = date("m,d,Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $reais = $_GET["reais"] ?? 0;
        $dolar = $reais / $cotacao;
        $padrao = numfmt_create("pt-BR" , NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD")  . "</strong></p>";
        ?>
        <p>* <strong>Cotação de móvel</strong> informada pelo <strong><a href="https://www.bcb.gov.br/" target="_blank">Banco Central</a></strong>.</p>
        <button><a href="javascript:history.go(-1)">Voltar</a></button>
    </section>
</body>
</html>