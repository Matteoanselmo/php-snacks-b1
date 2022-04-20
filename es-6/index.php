<?php
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
    <link rel="stylesheet" href="style.css">
    <title>Snack 6</title>
</head>
<body>
    <div id="grey">
        <?php
            echo count($db['teachers']);
            for($i = 0; $i < count($db['teachers']); $i++){
                var_dump($db['teachers'][$i]);
            }
        ?>
    </div>
    <div id="green">
        <?php
            echo count($db['pm']);
            for($i = 0; $i < count($db['pm']); $i++){
                var_dump($db['teachers'][$i]);
            }
        ?>
    </div>
</body>
</html>