<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>exemplo de php</h1>
    <?php 
    date_default_timezone_set('America/Sao_Paulo');
    echo "hoje é dia: " . date('d/m/Y');
    echo "<br>agora são: " . date('H:i:s');
    ?>
</body>
</html>