<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres (suporta acentuação) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade no celular -->
    <title>Operadores Aritméticos do PHP</title> <!-- Título da aba do navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Link com o arquivo de estilos CSS -->
</head>
<body>
    <header>
        <h1>Operadores Aritméticos do PHP</h1> <!-- Título principal da página -->
    </header>

    <section>
        <ul> <!-- Lista para exibir os resultados -->
            <?php    
                // Soma de dois números inteiros
                $a = 2 + 2;
                echo "<li>2 + 2 = $a</li>";
                echo "<pre>"; var_dump($a); echo "</pre>"; // Mostra o tipo e valor

                // Soma de dois valores do tipo string contendo números
                $b = "2" + "2";
                echo "<li>\"2\" + \"2\" = $b</li>";
                echo "<pre>"; var_dump($b); echo "</pre>"; // O PHP converte strings numéricas automaticamente

                // Concatenação de duas strings com o operador ponto (.)
                $c = "2" . "2";
                echo "<li>\"2\" . \"2\" = $c</li>";
                echo "<pre>"; var_dump($c); echo "</pre>";

                // Concatenação de duas palavras
                $e = "Gustavo" . "Guanabara";
                echo "<li>\"Gustavo\" . \"Guanabara\" = $e</li>";
                echo "<pre>"; var_dump($e); echo "</pre>";

                // A linha abaixo daria erro porque "nota 10" não é um número válido para soma
                // $f = "nota 10" + "101 dálmatas"; 

                // Operador de adição
                $soma = 5 + 2;
                echo "<li>5 + 2 = $soma</li>";
                echo "<pre>"; var_dump($soma); echo "</pre>";

                // Operador de subtração
                $subtracao = 5 - 2;
                echo "<li>5 - 2 = $subtracao</li>";
                echo "<pre>"; var_dump($subtracao); echo "</pre>";

                // Operador de multiplicação
                $multiplicacao = 5 * 2;
                echo "<li>5 * 2 = $multiplicacao</li>";
                echo "<pre>"; var_dump($multiplicacao); echo "</pre>";

                // Operador de divisão
                $divisao = 5 / 2;
                echo "<li>5 / 2 = $divisao</li>";
                echo "<pre>"; var_dump($divisao); echo "</pre>";

                // Operador de módulo (resto da divisão)
                $resto = 5 % 2;
                echo "<li>5 % 2 = $resto</li>";
                echo "<pre>"; var_dump($resto); echo "</pre>";

                // Operador de exponenciação (potência)
                $potencia = 5 ** 2;
                echo "<li>5 ** 2 = $potencia</li>";
                echo "<pre>"; var_dump($potencia); echo "</pre>";
            ?>    
        </ul>
    </section>

    <footer>
        <!-- Rodapé simples com data fictícia -->
        <p>&copy; 25/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>
