<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 006</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Anatomia de uma divisão</h1>
    </header>
    <?php
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto =  $dividendo % $divisor;

    ?>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor?>">
            <input type="submit" value="Analisar">
    </main>

    <section>
        <h1>Estrutura da Divisão </h1>
        <table class="divisao">
            <tr>
                <td><?= $dividendo?></td>
                <td><?= $divisor?></td>
            </tr>
            <tr>
                <td><?= $resto?></td>
                <td><?= $quociente?></td>
            </tr>
        </table>
      
    </section>
    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 01/09/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>