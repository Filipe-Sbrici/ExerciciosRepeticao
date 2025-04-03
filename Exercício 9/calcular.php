<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
    <?php
        $num = $_POST["var1"];
        $inter = $_POST["var2"]
    
        for ($i = 0; $i >= $num; $i+=$inter){
                echo " $i <br>";
        }
    ?>
</body>
</html>