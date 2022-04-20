

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanck 2</title>
</head>
<body>
    <p>
        <?php
        $params = $_GET;
            if((strlen($params['name']) > 3) && (strpos($params['mail'], '@')) && (strpos($params['mail'], '.')) &&(is_numeric($params['age']))){
                echo $check = 'Accesso riuscito';
            } else{
                echo $check = 'Accesso negato';
            }
        ?>
    </p>
</body>
</html>