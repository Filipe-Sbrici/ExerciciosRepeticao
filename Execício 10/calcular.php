<?php

$num = $_POST ["num"];
$inter = $_POST ["inter"];
for ($i = $num; $i >= 0; $i -= $inter) {
    
    echo "$i<br>";
}

?>

