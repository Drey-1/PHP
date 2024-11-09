<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou";

                echo "<h1>Testando a superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Testando a superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1>Testando a superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1>Testando a superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1>Testando a superglobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>Testando a superglobal ENV</h1>";
                var_dump($_ENV);
                // forsearch()

                echo "<h1>Testando a superglobal SERVER</h1>";
                var_dump($_SERVER);

                echo "<h1>Testando a superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>