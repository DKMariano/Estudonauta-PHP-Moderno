<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 008</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
    <?php
        $numero = $_GET['numero'] ?? 0;
        $rquadrada = sqrt($numero);
        $rcubica = pow($numero, 1/3);
    ?>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <main>
        <form action="">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="" >
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h1>Resultado final</h1>
        <p>Analisando o número <strong><?= number_format($numero, 2, ",", ".");?></strong> temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?= number_format($rquadrada, 2, ",", "." )?></strong>.</li>
            <li>A sua raiz cúbica é <strong><?= number_format($rcubica, 2, ",", ".")?></strong>.</li>
        </ul>
    </section>

    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 02/09/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>