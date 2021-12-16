<?php

$frase = 'Questo è il primo esercizio di PHP';
echo $frase;

echo '<br>';

echo strlen($frase);

echo '<br>';

$divieto = $_GET["divieto"];

echo $risultato = str_replace($divieto, '***', $frase);

echo '<br>';

echo strlen($risultato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>