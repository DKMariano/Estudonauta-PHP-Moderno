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
            $início = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo'
            . '(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $início . '\'&'
            . '@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&'
            . '$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);
            $cotacao = $dados["value"][0]["cotacaoCompra"];              
            $real = $_GET["idreal"] ?? 0;
            $dolar = $real / $cotacao;
            echo "R\$ " . number_format($real, 2, ',', '.') . " equivalem a <strong>US\$ " . number_format($dolar, 2, ',', '.') . "</strong>.";
            echo"<p>*Cotação do <strong>Banco Central</strong>.</p>";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>

    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 25/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>