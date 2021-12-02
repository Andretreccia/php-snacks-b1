<?php
/* Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. */


$text = "Ad ogni ciclo il valore dell'elemento corrente dell'array viene assegnato a value e il puntatore dell'array viene spostato di una posizione, nell'elemento successivo. Le iterazioni terminano quando il puntatore sarà arrivato all'ultimo elemento. La prima versione viene utilizzata per leggere gli elementi di un array, la seconda versione è utile nel caso di array associativi, in cui vogliamo accedere alle chiavi dell'array.";

explode(".", $text );

$array = explode(".", $text );
$keys = array_keys($array);
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
    <?php foreach($array as $key => $value) { 
        ?>
       <p> <?php echo $value ?> </p>
   <?php } ?>
</body>
</html>

