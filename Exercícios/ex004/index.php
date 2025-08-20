<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação de caracteres como UTF-8 (essencial para exibir emojis e acentos corretamente) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade para dispositivos móveis -->
    <title>String</title>
</head>
<body>
    <?php 
        // ==============================
        // INTERPOLAÇÃO DE STRINGS
        // ==============================

        // Quando usamos aspas duplas (" "), o PHP interpreta variáveis e escapes (como \u{})
        $nome = "Dimitrius";
        $sobrenome = "Khouri";
        echo "$nome $sobrenome \u{1F596} <br>"; // 🖖 será exibido após o nome completo

        // Aspas simples (' ') NÃO interpretam variáveis nem escapes
        echo '$nome $sobrenome \u{1F596} <br>'; // Vai imprimir exatamente o texto sem substituições

        // Exemplo misto com Unicode dentro da variável
        $nome = 'Dimitrius';
        $sobrenome = "Khouri \u{1F596}";
        echo "$nome $sobrenome <br>"; // 🖖 será interpretado porque está entre aspas duplas
        echo '$nome $sobrenome <br>'; // Nada será interpretado

        echo "<hr>";

        // ==============================
        // USO DE CONSTANTES
        // ==============================

        // Constante simples
        const ESTADO = "Bahia";
        echo "Moro no Estado ESTADO <br>"; // Imprime literalmente "ESTADO"
        echo 'Moro no Estado ESTADO <br>'; // Idem

        // Forma correta de imprimir o valor da constante com concatenação
        echo "Moro no " . ESTADO . "<br>"; 
        echo 'Moro no ' . ESTADO . '<br>'; 

        // Constante com Unicode (codepoint será interpretado na criação)
        const CANAL = "Critical Role \u{1F499}";  
        echo "Eu adoro o " . CANAL . "<br>"; // 💙 será exibido
        echo 'Eu adoro o ' . CANAL . '<br>'; // 💙 também aparece pois já foi definido no valor

        // Aqui usamos aspas simples para definir a constante — o Unicode NÃO será processado
        const CANAL2 = 'Critical Role \u{1F499}';  
        echo "Eu adoro o " . CANAL2 . "<br>"; // Vai exibir literalmente \u{1F499}
        echo 'Eu adoro o ' . CANAL2 . '<br>'; // Idem

        echo "<hr>";

        // ==============================
        // FUNÇÕES NATIVAS
        // ==============================

        // Isso imprimirá literalmente o texto, pois a função não está sendo executada
        echo "Estamos no ano de date('Y') <br>"; 

        // Aqui sim: a função `date()` é chamada e retorna o ano atual
        echo "Estamos no ano de " . date('Y') . "<br>"; 

        echo "<hr>";

        // ==============================
        // CARACTERES DE ESCAPE
        // ==============================

        $nom = "Rodrigo";
        $snom = "Nogueira";

        // Exemplo de uso de aspas dentro de strings
        echo "$nom \"Minotauro\" $snom <br>";     // Aspas duplas escapadas
        echo '$nom "Minotauro" $snom <br>';       // Aspas não precisam ser escapadas em aspas simples

        // Escape de tabulação e nova linha (só visível com <pre>)
        echo "$nom \t Minotauro \n $snom <br>";   // \t e \n funcionam com aspas duplas
        echo '$nom \t Minotauro \n $snom <br>';   // Tudo será exibido literalmente

        // Outros escapes úteis
        echo "$nom \\ Minotauro \$ $snom <br>";   // Mostra: barra invertida e símbolo de cifrão
        echo '$nom \u Minotauro \u $snom <br>';   // \u exibido como texto puro

        // RESUMO DOS ESCAPES:
        // \n   → Nova linha
        // \t   → Tabulação horizontal
        // \\   → Barra invertida
        // \$   → Cifrão
        // \u{} → Unicode (apenas com aspas duplas e UTF-8)

        echo "<hr>";

        // ==============================
        // HEREDOC (interpreta variáveis)
        // ==============================

        $curso = "PHP";
        $ano = date('Y');

        echo <<<FRASE
<pre>
Estou estudando $curso em $ano!
Eu estou gostando!
Abraços \u{1F596}
</pre>
FRASE;

        echo "<hr>";

        // ==============================
        // NOWDOC (NÃO interpreta nada)
        // ==============================

        echo <<<'FRASE'
<pre>
Estou estudando $curso em $ano!
Eu estou gostando!
Abraços \u{1F596}
</pre>
FRASE;

        echo "<hr>";
    ?>
</body>
</html>
