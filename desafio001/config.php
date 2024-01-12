<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ex005/style.css">
    <title>Document</title>
</head>
<body>
    <header><h1>resultado do processamento</h1></header>    

    <main>
        <?php 
        $numero = $_GET["number"];
        echo "<p>o numero informado foi $numero</p> 
        <br> 
        <p> o antecessor do número é ". $numero - 1 . " 
        <br>
        o sucessor é ". $numero + 1 . "</p>";
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
    </main>

</body>
</html>