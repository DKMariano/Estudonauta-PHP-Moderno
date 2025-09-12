<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 005</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
            $numero = $_POST["idnumero"];
            $parte_inteira = (int) $numero;    
            $parte_decimal = round($numero - $parte_inteira, 3);
            echo "<p>Analisando o número <strong>". number_format($numero, 3, ",", ".")."</strong> informado pelo usuário:</p>";
            echo"<ul><li>A parte inteira do número é <strong>". number_format($parte_inteira, 0, ",",".")."</strong>.</li>";
            echo"<li>A parte fracionária do número é <strong>". number_format($parte_decimal, 3, ",", ".")."</strong>.</li>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 25/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>