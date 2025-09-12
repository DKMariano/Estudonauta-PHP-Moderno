<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 001</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>
        <p>
            <?php
                $numero = $_GET["numero"] ?? 0;
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi <strong>$numero</strong>.<br>";
                echo "O seu <em>antecessor</em> é <em>$antecessor</em>.<br>";
                echo "O seu <em>sucessor</em> é <em>$sucessor</em>.<br>";
            ?>
        </p>
    <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button></a>
    </section>
    
</body>
</html>