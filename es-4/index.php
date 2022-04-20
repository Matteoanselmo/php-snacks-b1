<?php   
    $array = [];
    for($i = 0; $i < 15; $i++){
        $randomNum = rand(0 , 100);
        if(!in_array($randomNum, $array)){
            $array [] = $randomNum;
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    <?php
        var_dump($array);
    ?>
</body>
</html>