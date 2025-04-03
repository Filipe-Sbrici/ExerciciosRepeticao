<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link href="styles.css" rel="stylesheet" >
</head>
<body>
<?php
$frase = $_POST["frase"];
for ($i = 0; $i < 10; $i++) {
    echo " $frase <br>";
}
?>
</body>
</html>