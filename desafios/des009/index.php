<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 009</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 0;
        $peso2 = $_GET['peso2'] ?? 0;
        $mediaSimples = ($valor1 + $valor2) / 2;
        $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>
    <header>
        <h1>Médias Aritméticas</h1>
    </header>

    <main>    
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?=$valor1?>" step="0.01">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" min="1" value="<?= $peso1?>" step="0.01">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2?>" step="0.01">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" min="1" value="<?= $peso2?>" step="0.01">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h1>Cálculo das Médias</h1>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($mediaSimples, 2, ",", ".")?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?= number_format($mediaPonderada, 2, ",", ".")?> </li>
        </ul>
    </section>
    
</body>

</html>
