<?php

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 3</title>
</head>
<body>
    <ul>
        <?php
            $postsValues = array_values($posts);
            $postskeys = array_keys($posts);
            for($i = 0; $i < count($postskeys); $i++){  ?>
            <li>
                
                <p>
                    <?php 
                        for($postsIndex = 0; $postsIndex < count($postsValues[$i]); $postsIndex++ ){
                            echo $postsValues[$i][$postsIndex]['title'] . ' ' . $postsValues[$i][$postsIndex]['author'] . ' ' . $postsValues[$i][$postsIndex]['text'];
                        }
                    ?>
                </p>
            </li>
        <?php };?>
    </ul>
</body>
</html>