<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio # 003</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php
            $real = $_GET["idreal"] ?? 0;
            $dolar = $real / 5.17;
            echo "R\$ " . number_format($real, 2, ',', '.') . " equivalem a <strong>US\$ " . number_format($dolar, 2, ',', '.') . "</strong>.";
            echo"<p>*<strong>Cotação fixa de R$ 5,17</strong> informada diretamente no código.</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 25/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>