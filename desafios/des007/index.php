<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 007</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        $salarioMinimo = 1380.00;
        $salarioAtual = isset($_GET['salario']) && is_numeric($_GET['salario']) ? (float) $_GET['salario'] : 0;
        $quantidadeSalario = floor($salarioAtual / $salarioMinimo);
        $sobra = $salarioAtual % $salarioMinimo;
    ?>
    <header>
        <h1>Informe seu salário</h1>
    </header>
    <main>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?= $salarioAtual?>" >
            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong>.</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Resultado Final</h1>
        <?php echo "Quem recebe o salário de ". number_format($salarioAtual, 2, ',', '.' )." ganha<strong> $quantidadeSalario salários mínimos</strong> + R$".number_format($sobra, 2, ',','.') ."."?>
    </section>

    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 02/09/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>