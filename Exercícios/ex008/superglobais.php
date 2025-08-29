<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define o conjunto de caracteres (suporta acentuação) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Responsividade no celular -->
    <title>Superglobais no PHP</title> <!-- Título da aba do navegador -->
    <link rel="stylesheet" href="style.css"> <!-- Link com o arquivo de estilos CSS -->
</head>
<body>
    <header>
        <h1>Superglobais no PHP</h1> <!-- Título principal da página -->
    </header>

    <main>
        <pre>
            <?php
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["TESTE"] = "FUNCIONOU!";

                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                                
                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);
                                
                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                                
                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);
                                                
                echo "<h1>Superglobal ENV</h1>";
                var_dump($_ENV);
                foreach(getenv() as $c=> $v){
                    echo "<br> $c -> $v";
                }
                                                
                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);
                                                
                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);


            ?>
        </pre>    
    </main>

    <footer>
        <p>&copy; 29/08/2025 - Exercício de Funções PHP</p>
    </footer>
</body>
</html>
