<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 012</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $total = $_GET['total'] ?? 0;
        $sobra = $total;
        //Total de semanas
        $semanas = (int)($sobra / 604800);
        $sobra = $sobra % 604800;
        //Total de dias
        $dias = (int)($sobra/86400);
        $sobra = $sobra % 86400;
        //Total de horas
        $horas = (int)($sobra/3600);
        $sobra = $sobra % 3600;  
        //Total de minutos
        $minutos = (int)($sobra/60);
        $sobra = $sobra % 60;   
        //Total de Segundos
        $segundos = $sobra;

        $mensagem = "<p>Analisando o valor que você digitou, <strong>". number_format($total, 0, ",", ".")." segundos</strong> equivalem a um total de:</p>
        <ul>
            <li>$semanas semanas</li>
            <li>$dias dias</li>
            <li>$horas horas</li>
            <li>$minutos minutos</li>
            <li>$segundos segundos</li>
        </ul>
        ";

    ?>

    <header>
        <h1>Calculadora de Tempo</h1>
    </header>

    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?=$total?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Totalizando tudo</h2>
        <?=$mensagem?>
    </section>
    
</body>
</html>