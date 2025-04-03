<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<?php

$num = $_POST ["num"];

for ($i = 0; $i <= $num; $i++) {
    if ($i % 2 == 0){
        echo " $i <br>";
    }
    else{}
}

?>
</body>
</html>