<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome,
 Cognome e la media dei voti di ogni alunno. */



 $C42 = [
        [
            'name' => 'Chiara',
            'surname' => 'Papagni',
            'voti' => [3, 5, 6, 10]
        ],
        [
            'name' => 'Andrea',
            'surname' => 'Bellatreccia',
            'voti' => [10, 10, 10, 10]
            
        ],

       [
            'name' => 'Valentina',
            'surname' => 'Trebbi',
            'voti' => [10, 10, 9, 8]
            
        ],
       [
            'name' => 'Valerio',
            'surname' => 'Corda',
            'voti' => [3, 7, 9, 2]
            
        ],

       [
            'name' => 'Samuele',
            'surname' => 'Di Chio',
            'voti' => [4, 10, 8, 4]
            
        ],

       [
            'name' => 'Federico',
            'surname' => 'Frascà',
            'voti' => [7, 7, 8, 1]
            
        ],
];
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
    <?php foreach($C42 as $key => $value) { 
            $studente = $value
        ?>
            <h5><?php echo $studente['name']; echo " "; echo $studente['surname']; ?></h5>

            <p> media voti: <?php echo array_sum($studente['voti'])/count($studente['voti'])   ?></p>
            
        <?php } ?>
</body>
</html>