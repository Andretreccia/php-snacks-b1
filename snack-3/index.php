<?php
/*  Stampare ogni data con i relativi post. */

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

//$keys = array_keys($posts);

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
    <?php foreach($posts as $key => $value) { 
        $post = $value;
        ?>
        
       <h2> <?php echo $key ?> </h2>
       <hr>

       <?php foreach($post as $key => $value) { 
           
           
           
           
           ?>
           <p> titolo: <?php echo $value['title']; ?></p>
           <p> autore: <?php echo $value['author']; ?></p>
           <p>testo:  <?php echo $value['text']; ?></p>
           <p>________</p>
           

   <?php } ?>
    <?php } ?>
</body>
</html>