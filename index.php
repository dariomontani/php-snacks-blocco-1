<?php

// ## Snack 2
// Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

if (strlen($name) > 3 && (strpos($mail, ".") && strpos($mail, "@")) && is_numeric($age)){
    $check = "Accesso riuscito";
} else {
    $check = "Accesso negato";
}

// ## Snack 3
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blocco PHP Snacks</title>
</head>
<body>
    <h1><?php echo $check; ?></h1>
</body>
</html>