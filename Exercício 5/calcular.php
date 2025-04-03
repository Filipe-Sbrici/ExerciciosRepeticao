<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
    <?php
        $frase = $_POST["var1"];
        $qtd = $_POST["var2"];
    
        for ($i = 0; $i < $qtd; $i++){
            echo "$frase<br>";
        }
    ?>
</body>
</html>