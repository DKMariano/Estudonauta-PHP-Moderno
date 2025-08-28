<!-- rand() = 1951 - Linear Congrential Gererator
mt_rand() = 1997 - Mersenne Twister
A partir do PHP 7.1, rand() é um simples apontamento para mt_rand()
random_int() gera números aleatórios criptograficamente seguros -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio #002</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <section>
        <?php
            $numero = rand(0, 100);
            echo "Gerando um número aleatório entre o e 100...<br>";
            echo "O valor gerado foi <strong>$numero </strong><br>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar</button>
    </section>
    <!-- Rodapé simples -->

    <footer>
        <p>&copy; 25/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>