<?php 

    $text = 'A che serve una serva che non serve? Manda la serva che non serve da chi si servirà di una serva che non serve e serviti di una serva che serve.';
    $banned = $_GET["banned"];
    $replace =  '***';
    $newText = str_replace($banned, $replace, $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<style>
    body { text-align: center; }
    h2, h3 { margin-top: 10px; }
    h2 { color: blue; }
    h3 { color: red; }
</style>
<body>
    <h1>PHP Badwords</h1>
    <h2>Il mio testo:</h2>
    <p><?php echo $text ?></p>
    <h3>La mia badword: <strong><?php echo $banned ?></strong></h3>
    <h2>Il mio testo censurato:</h2>
    <p><?php echo $newText ?></p>
</body>
</html>