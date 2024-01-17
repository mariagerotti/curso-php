<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header><h1>sorteador!</h1></header>

    <main>
        <?php 
        $min = 0;
        $max = 100;
        $num = mt_rand($min, $max);

        echo "<p>o número sorteado foi $num</p>";

        ?>
        <button onclick="javascript:document.location.reload()">gerar novo</button>
    </main>
</body>
</html>