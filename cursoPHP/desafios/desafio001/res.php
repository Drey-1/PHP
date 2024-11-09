<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
        $num = $_GET["num"] ?? 0;
        $antes = $num - 1;
        $depois = $num + 1;
        echo "<p>O número escolhido foi $num</p>";
        echo "<p>O seu antecessor é " . ($num - 1) . "</p>";
        echo "<p>O seu sucessor é " . ($num + 1) ."</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>