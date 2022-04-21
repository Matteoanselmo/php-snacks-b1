<?php
    $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero qui eaque consequuntur tempore similique velit earum ab ex, quae iste necessitatibus, dignissimos dolorem voluptate? Eaque nulla molestias quia harum reprehenderit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero qui eaque consequuntur tempore similique velit earum ab ex, quae iste necessitatibus, dignissimos dolorem voluptate? Eaque nulla molestias quia harum reprehenderit. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero qui eaque consequuntur tempore similique velit earum ab ex, quae iste necessitatibus, dignissimos dolorem voluptate? Eaque nulla molestias quia harum reprehenderit!';
    $paragraphs = explode('.' , $paragraph);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
        <?php for($i = 0; $i < count($paragraphs); $i++){ ?>
            <p>
                <?php echo $paragraphs[$i]; ?>
            </p>
        <?php }?>
</body>
</html>