<?php
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */



$name = $_GET['name'];

$email = $_GET['email'];

$age = $_GET['age'];


if ( strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age) == true ) {
    $result = "Accesso riuscito";
} else {
    $result = "Accesso negato";
}

var_dump($result)
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
     <form action="./index.php">
        <label for="name">Inserire un nome:</label>
        <input type="text" name="name" id="name">
        <label for="email">Inserire una mail:</label>
        <input type="text" name="email" id="email">
        <label for="age">Inserire l'età:</label>
        <input type="text" name="age" id="age">
        <input type="submit">
    </form>
     <p><?= $result ?></p>
</body>
</html>