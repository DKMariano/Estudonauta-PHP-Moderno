<!DOCTYPE html>
<html lang="pt-br"> <!-- Define o tipo de documento e o idioma da página -->
<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres (UTF-8 permite acentuação) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Torna a página responsiva em dispositivos móveis -->
    <title>Formulários Retroalimentados</title> <!-- Define o título que aparece na aba do navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Importa o arquivo CSS com estilos personalizados -->
</head>
<body>
    <header>
        <h1>Somador de Valores</h1> <!-- Título principal exibido no topo da página -->
    </header>

    <?php
        // Recupera os valores enviados via GET (v1 e v2); se não existirem, define como 0 (null coalescing operator)
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <!-- Formulário que envia os dados via método GET para a própria página (autoatualização/retroalimentação) -->
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <!-- Campo para o primeiro número -->
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?= $valor1?>"> <!-- O valor preenchido é mantido após o envio -->

            <!-- Campo para o segundo número -->
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?= $valor2?>"> <!-- O valor preenchido é mantido após o envio -->

            <!-- Botão de envio do formulário -->
            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h1>Resultado da Soma</h1>
        <?php
            // Realiza a soma dos dois valores
            $soma = $valor1 + $valor2;

            // Exibe o resultado da soma utilizando interpolação de variáveis
            print "<p>A soma entre os valores $valor1 e $valor2 é igual a $soma</p>";
        ?>
    </section>

    <footer>
        <!-- Rodapé com data e descrição -->
        <p>&copy; 01/09/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>
