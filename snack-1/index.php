<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. */
$partite = [
            [   
                'nome_casa' => 'squadra1',
                'punti_casa'=> 22 ,
                'nome_ospite' => 'squadra2',
                'punti_ospite' => 44,
            ],
            [   
                'nome_casa' => 'squadra3',
                'punti_casa'=> 265 ,
                'nome_ospite' => 'squadra4',
                'punti_ospite' => 40,
            ], 
            [   
                'nome_casa' => 'squadra6',
                'punti_casa'=> 12 ,
                'nome_ospite' => 'squadra67',
                'punti_ospite' => 64,
            ], 
            [   
                'nome_casa' => 'squadra4567',
                'punti_casa'=> 262 ,
                'nome_ospite' => 'squadra567',
                'punti_ospite' => 4455,
            ],          
                ];
 //var_dump($giornata_x);
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
    <?php for ($i=0; $i < count($partite); $i++) { ?> 
    <p>
        <?= $partite[$i]['nome_casa'] ?> 
        -
        <?= $partite[$i]['nome_ospite'] ?> 
        |
        <?= $partite[$i]['punti_casa'] ?> 

        <?= $partite[$i]['punti_ospite'] ?> 

    </p>
            
    <?php } ?>
</body>
</html>