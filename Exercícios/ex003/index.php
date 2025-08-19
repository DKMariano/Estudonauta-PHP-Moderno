<!-- parei na aula Manipulação de strings com PHP -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <?php
        // Variáveis (case sensitive)
        $nome = "Gustavo";
        $Nome = "Dimitrius"; // Diferente de $nome
        $sobrenome = "Guanabara";

        // Constante
        const PAIS = "Brasil";

        // Exibição com interpolação e concatenação
        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS . ".<br>";

        // Estilos de nomenclatura
        $nomeCompletoCliente = "Camel Case";                 // camelCase
        $telefone_contato_fornecedor = "Snake Case";         // snake_case

        // Inteiro hexadecimal
        $inteiro = 0x1A;
        echo "O valor da variável hexadecimal é $inteiro.<br>";

        // Inteiro octal
        $inteiro2 = 010;
        echo "Valor em octal (010) usando var_dump(): ";
        var_dump($inteiro2);
        echo "<br>";

        // Número em notação científica
        $decimal = 3e2;
        echo "Valor em notação científica (3e2): ";
        var_dump($decimal);
        echo "<br>";

        // String numérica
        $num = "950";
        echo "String numérica '950': ";
        var_dump($num);
        echo "<br>";

        // Casting explícito para integer
        $num = (int) "950";
        echo "Casting para inteiro: ";
        var_dump($num);
        echo "<br>";

        // Booleanos
        $casado = false;
        echo "O valor para casado é: " . ($casado ? "true" : "false") . "<br>";

        $divorciado = true;
        echo "O valor para divorciado é: " . ($divorciado ? "true" : "false") . "<br>";

        // Vetor misto (array)
        $vet = [6, 2.5, "Maria", 3, false];
        echo "O conteúdo do vetor é: ";
        var_dump($vet);
        echo "<br>";

        // Classe com construtor
        class Pessoa {
            private string $nome;

            public function __construct(string $nome) {
                $this->nome = $nome;
            }
        }

        // Criando objeto
        $p = new Pessoa("Ana");
        echo "Objeto da classe Pessoa: ";
        var_dump($p);
    ?>
</body>
</html>
