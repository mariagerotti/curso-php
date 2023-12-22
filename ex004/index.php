<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sequencia de escape</title>
</head>
<body>
    <h1>exemplo sequencia de escape</h1>
    <?php 
    //$nome = "maria eduarda";
    //$snome = "gerotti";
    //echo "$nome \"duda\" $snome";

    $nome = "maria eduarda";
    $snome = "gerotti";
    $apelido = "duda";

    echo "$nome ". $apelido ." $snome";

    //sequencia de escape para aspas duplas
    // \n = nova linha
    // \t = tabulação
    // \\ = barra invertida
    // \$ = cifrão
    // \" = aspas duplas
    // \u{xxxx} = caractere unicode
    // \br = quebra de linha
    ?>
</body>
</html>