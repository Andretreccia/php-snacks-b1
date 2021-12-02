<?php
 /* Stampiamo il nostro array mettendo gli insegnanti in un rettangolo
  grigio e i PM in un rettangolo verde. */
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .teachers{
            background-color: gray;
            width: 500px
        }
        .pm{
            background-color: green;
            width: 500px
        }
    </style>
</head>
<body>
    <?php  foreach($db as $key => $value) {
        $array = $value;
        ?>
       <div class="<?php echo $key  ?>">
           <h2><?php echo $key ?></h2>
           <?php foreach($array as $key => $value) {

           ?>
           <p> <?php echo $value['name']; echo ' '; echo  $value['lastname']?> </p>
           

           <?php } ?>
       </div>
 <?php }?>


</body>
</html>