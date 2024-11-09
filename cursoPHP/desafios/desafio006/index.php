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
        $dividendo = (int)($_GET["d1"] ?? 0);
        $divisor = (int)($_GET["d2"] ?? 1);
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">

            <label for="d1">Dividendo:</label>
            <input type="number" name="d1" id="d1" value="<?=$dividendo?>">

            <label for="d2">Divisor:</label>
            <input type="number" name="d2" id="d2" value="<?=$divisor?>" min="1">
            
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
        //Conta
        $quociente = intdiv($dividendo,$divisor);
        $resto = $dividendo % $divisor;

        //Amostra
        echo "<ul>";
        echo "<li>Dividendo: $dividendo";
        echo "<li>Divisor: $divisor";
        echo "<li>Quociente: $quociente";
        echo "<li>Resto: $resto";
        echo "</ul>";
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>