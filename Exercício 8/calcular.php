<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 8</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<?php

$num = $_POST ["num"];

for ($i = 0; $i <= 10; $i++) {
    $numm = $num * $i;
    echo "$num x $i = $numm<br>";
}

?>
</body>
</html>