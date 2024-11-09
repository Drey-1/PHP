<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Testes dos Tipos Primitivos</h1>
    <?php
    // 0x = exadecimal 0b = binario 0 = Octal
    // $num = 010;
    // echo "O valor da variavel é $num";

    // $v = 300;
    // var_dump($v);

    // $num = 3e2; 3 x 10(2)
    // var_dump($num);

    // $num = (int)"950";
    // var_dump($num)

    // $casado = false;
    // var_dump($casado);
    // print "O valor par casado é $casado";

    // $vet = [6,2.5,9,"Maria",false];
    // var_dump($vet);

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p)
    ?>
</body>
</html>