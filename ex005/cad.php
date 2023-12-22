<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do procssamento</h1>
    </header>

    <main>
        <?php 
        // superglobal $_REQUEST = $_GET, $_POST, $_COOKIE juntas

        $nome = $_GET["name"] ?? "sem nome";
        $sobrenome = $_GET["surname"] ?? "sem sobrenome";
        echo "<p>é um prazer te conhecer, $nome $sobrenome";
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
    </main>

</body>
</html>