<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
    <?php
        $num = $_POST["var"];
    
        for ($i = $num; $i >= 0; $i--){
            if ($i % 2 == 0){
                echo " $i <br>";
            }
        }
    ?>
</body>
</html>