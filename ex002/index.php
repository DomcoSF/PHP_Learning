<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Teste de Data</h1>
    <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje é dia " .date("D/M/Y");
        echo "e a Hora é " .date("G:i:s T");
    ?>
</body>
</html>