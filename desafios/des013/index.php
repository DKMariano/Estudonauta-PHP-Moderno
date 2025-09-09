<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 013</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $saque = $_GET['saque'] ?? 0;
        $sobra = $saque;
        $cem = (int)($sobra / 100);
        $sobra %= 100;
        $cinquenta = (int)($sobra / 50);
        $sobra %= 50;
        $dez = (int) ($sobra / 10);
        $sobra %= 10;
        $cinco = (int)($sobra / 5);
        $sobra %= 5;

    ?>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>
    <main>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="saque" id="saque" value="<?=$saque?>" step="5" >
            <p style="font-size: 0.6em;">*<strong>Notas disponíveis:</strong> R$ 100, R$50, R$ 10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$ <?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$cinquenta?></li>
            <li> <img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x <?=$dez?></li>
            <li> <img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x <?=$cinco?></li>
        </ul>
    </section>
</body>
</html>
