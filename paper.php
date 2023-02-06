<?php
$name = $_GET['word'];
$paragraph = $_GET['paragraph'];
$array = strlen($paragraph);
$new_array = str_replace($name,'***',$paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>
</head>
<body>
    <h1>Paragrafo Originale</h1>
    <p><?= $paragraph ?></p>
    <p>La lunghezza del testo è <?= $array ?></p>
    <hr>
    <h1>Paragrafo Censurato</h1>
    <p><?= $new_array?> </p>
    <p>La lunghezza del testo è </p>
</body>
</html>