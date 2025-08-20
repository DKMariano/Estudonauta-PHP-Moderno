<!-- Obtendo dados de formulários com PHP (parte 2) - @CursoemVideo de PHP - Gustavo Guanabara -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interação com Formulários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>

    <section>
        <form action="cad.php" method="get"></form>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="sobrenome">
            <input type="submit" value="Enviar">
    </section>
</body>
</html>