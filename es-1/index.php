<?php 
    $calendar = [
        [
            'team1' =>'Milan' ,
            'team2' =>'Juventus' ,
            'score1' =>'6' ,
            'score2' => '9' ,
        ],
        [
            'team1' =>'inter' ,
            'team2' =>'Roma' ,
            'score1' =>'6' ,
            'score2' => '9' ,
        ],
        [
            'team1' =>'Bando' ,
            'team2' =>'Palermo' ,
            'score1' =>'6' ,
            'score2' => '9' ,
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
    <h1>risultati</h1>
    <ul>
        <?php
            for($i = 0; $i < count($calendar); $i++){
        ?>
        <li>
            <?php
                
                    // var_dump($calendar[$i]) ;
                    echo  $calendar[$i]['team1'] . ' ' . $calendar[$i]['team2'] . '|' . $calendar[$i]['score1'] . $calendar[$i]['score2'];
                
            ?>
        </li>
        <?php
            }
        ?>
    </ul>
</body>
</html>