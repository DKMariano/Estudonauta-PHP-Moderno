<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Suporte à acentuação -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsivo -->
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css"> <!-- Link com o CSS externo -->
</head>
<body>
    <header>
        <h1>Somador de Valores</h1>
    </header>

    <?php
        // Captura e validação dos valores recebidos via GET
        $valor1 = is_numeric($_GET['v1'] ?? null) ? (float)$_GET['v1'] : 0;
        $valor2 = is_numeric($_GET['v2'] ?? null) ? (float)$_GET['v2'] : 0;

        // Variável que conterá a mensagem do resultado
        $resultado = "Digite os valores acima e clique em <strong>Somar</strong>.";

        // Verifica se há envio de dados via GET
        if (isset($_GET['v1']) && isset($_GET['v2'])) {
            $soma = $valor1 + $valor2;
            $somaFormatada = number_format($soma, 2, ',', '.');
            $resultado = "A soma entre <strong>$valor1</strong> e <strong>$valor2</strong> é igual a <strong>$somaFormatada</strong>.";
        }
    ?>

    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="v1" step="any" value="<?= $valor1 ?>">

            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="v2" step="any" value="<?= $valor2 ?>">

            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p><?= $resultado ?></p>
    </section>

    <footer>
        <p>&copy; 01/09/2025 - Exercício com PHP 8</p>
    </footer>
</body>
</html>
