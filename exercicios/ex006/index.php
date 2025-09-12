<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Funções Aritméticas do PHP</h1>
    </header>

    <main>
        <ul>
        <?php 
            // Retorna o valor absoluto (sem sinal) de um número
            $valor_absoluto = abs(-500);
            echo "<li>O valor absoluto de -500 é $valor_absoluto.</li>";

            // Converte o número 254 da base 10 (decimal) para base 16 (hexadecimal)
            $conversao_base = base_convert(254, 10, 16);
            echo "<li>254 na base 10 corresponde a $conversao_base na base 16.</li>";

            // Arredonda um número para cima (próximo inteiro maior)
            $arredondamento_cima = ceil(7.67);
            echo "<li>7.67 arredondado para cima é $arredondamento_cima.</li>";

            // Arredonda um número para baixo (próximo inteiro menor)
            $arredondamento_baixo = floor(7.67);
            echo "<li>7.67 arredondado para baixo é $arredondamento_baixo.</li>";

            // Arredonda um número para o inteiro mais próximo
            $arredondamento_aritmetico = round(7.67);
            echo "<li>7.67 arredondado aritmeticamente é $arredondamento_aritmetico.</li>";
                          
            // Calcula a hipotenusa de um triângulo retângulo (Teorema de Pitágoras)
            $hipotenusa = hypot(5,2);
            echo "<li>A hipotenusa de um triângulo com lados 5 e 2 é " . number_format($hipotenusa, 2) . ".</li>";
            
            // Divisão normal (com casas decimais)
            $divisao_real = 5 / 2;
            echo "<li>5 dividido por 2 = " . number_format($divisao_real, 2) . "</li>";
                        
            // Divisão inteira (descarta o valor decimal)
            $divisao_inteira = intdiv(5,2);
            echo "<li>Divisão inteira de 5 por 2 = $divisao_inteira.</li>";
                                    
            // Retorna o menor valor entre os argumentos
            $valor_minimo = min(5, 2, 7, 5, 1, 9, 7, 6);
            echo "<li>O valor mínimo entre os dados é $valor_minimo.</li>";
                                                
            // Retorna o maior valor entre os argumentos
            $valor_maximo = max(5, 2, 7, 5, 1, 9, 7, 6);
            echo "<li>O valor máximo entre os dados é $valor_maximo.</li>";
            
            // Retorna o valor de PI usando função
            $valor_pi_func = pi();
            echo "<li>O valor de π (pi) usando <code>pi()</code> é " . number_format($valor_pi_func, 5) . ".</li>";
                    
            // Retorna o valor de PI usando constante pré-definida
            $valor_pi_const = M_PI;
            echo "<li>O valor de π (pi) usando <code>M_PI</code> é " . number_format($valor_pi_const, 5) . ".</li>";

            // Potência usando o operador de exponenciação (**)
            $potencia = 5 ** 2;
            echo "<li>5 elevado a 2 (com **) = $potencia.</li>";
            
            // Potência usando a função pow(base, expoente)
            $potencia_pow = pow(5, 2);
            echo "<li>5 elevado a 2 (com pow) = $potencia_pow.</li>";
            
            // Raiz quadrada usando operador de potência
            $raiz_quadrada = 81 ** (1/2);
            echo "<li>Raiz quadrada de 81 (com **) = $raiz_quadrada.</li>";
                        
            // Raiz quadrada usando a função sqrt()
            $raiz_sqrt = sqrt(81);
            echo "<li>Raiz quadrada de 81 (com sqrt) = $raiz_sqrt.</li>";

            // Raiz cúbica usando operador de potência
            $raiz_cubica = 27 ** (1/3);
            echo "<li>Raiz cúbica de 27 = " . number_format($raiz_cubica, 2) . ".</li>";

            // Seno de 30 graus (convertido para radianos com deg2rad)
            $seno = sin(deg2rad(30));
            echo "<li>O seno de 30° é " . number_format($seno, 4) . ".</li>";

            // Cosseno de 30 graus
            $cos = cos(deg2rad(30));
            echo "<li>O cosseno de 30° é " . number_format($cos, 4) . ".</li>";
                                    
            // Tangente de 30 graus
            $tangente = tan(deg2rad(30));
            echo "<li>A tangente de 30° é " . number_format($tangente, 4) . ".</li>";
        ?>
        </ul>
    </main>

    <!-- Rodapé simples -->
    <footer>
        <p>&copy; 22/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>
