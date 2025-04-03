<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<?php

$num = $_POST ["num"];
$inter = $_POST ["inter"];
for ($i = $num; $i >= 0; $i -= $inter) {
    
    echo "$i<br>";
}

?>
</body>
</html>
