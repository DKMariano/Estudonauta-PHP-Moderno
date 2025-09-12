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
        $anoAtual = date("Y");
        $anoNascimento = $_GET['anoNascimento'] ?? 0;
        $anoEscolhido = $_GET['anoEscolhido'] ?? $anoAtual; 
        $mensagem = "";

        if ($anoNascimento < 1900 || $anoNascimento > $anoAtual){
            $mensagem = "<strong>Ano de nascimento</strong> inválido";
        }

        elseif($anoEscolhido < $anoNascimento){
            $mensagem = "O <strong>ano escolhido</strong> não pode ser menor que o <strong>ano de nascimento</strong>";
        }
        else{
            $idade = $anoEscolhido - $anoNascimento;
            $mensagem = "<p> Quem nasceu em <strong><?=$anoNascimento?></strong> vai ter <strong><?=$idade?></strong> em <strong><?=$anoEscolhido?></strong>. </p>";
        }

    ?>
    <header>
        <h1>Calculando a sua idade</h1>
    </header>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" min="1900" max="<?= $anoAtual?>" id="anoNascimento" value="<?= $anoNascimento ?>">
            <label for="anoEscolhido">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?= $anoAtual?></strong>)</label>
            <input type="number" name="anoEscolhido" id="anoEscolhido" value="<?= $anoEscolhido?>">
            <input type="submit" value="Qual será a minha idade">
        </form>
    </main>

    <section>
        <h1>Resultado</h1>
        <?=$mensagem?>

    </section>
</body>
</html>