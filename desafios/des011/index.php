<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 011</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $precoAtual = $_GET['precoAtual'] ?? 0;
        $percentual = $_GET['percentual'] ?? 0;
        $reajuste = $precoAtual * $percentual / 100; 
        $precoReajuste = $precoAtual + $reajuste;
        $mensagem = "O <strong>produto</strong> que custava <strong>R$".number_format($precoAtual, 2, ",", ".")."</strong>, com <strong>$percentual%</strong> de aumento vai passar a custar <strong>R$".number_format($precoReajuste, 2, ",", ".")."</strong> a partir de agora.";

    ?>
    <header>
        <h1> Reajustador de Preço</h1>
    </header>

    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="precoAtual">Preço do Produto (R$)</label>
            <input type="number" name="precoAtual" id="precoAtual" value="<?=$precoAtual?>" min="0.10" step="0.01">
            <label for="percentual"> Qual será o percentual de reajuste (<strong><span id="percentualLabel"><?= $percentual ?></span>%</strong>) </label>
            <input type="range" name="percentual" id="percentual" value="<?= $percentual ?>" min="0" max="200" step="0.01" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section>
        <h1>Resultado do reajuste</h1>
        <?= $mensagem ?>
    </section>

    <script>
        mudaValor()
        function mudaValor() {
            const valor = document.getElementById("percentual").value;
            document.getElementById("percentualLabel").innerText = valor;
        }
    </script>

</body>
</html>