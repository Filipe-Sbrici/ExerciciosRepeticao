<?php

$num = $_POST ["num"];

for ($i = 0; $i <= 10; $i++) {
    $numm = $num * $i;
    echo "$num x $i = $numm<br>";
}

?>