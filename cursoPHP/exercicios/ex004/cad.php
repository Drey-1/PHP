<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultados do Processamento</h1>
    </header>
    <main>
        <?php 
        //var_dump($_REQUEST) $_GET $_POST $_COOKIES
        $n = $_GET["nome"] ?? "sem nome";
        $s = $_GET["snome"] ?? "desconhecido";
        echo "<p>É um prazer te conhecer,<strong> $n $s!</strong> Este é meu site!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>