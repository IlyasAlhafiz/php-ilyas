<?php

for ($i = 10; $i >= 1; $i--){
    echo "$i<br>";
}

echo "<br>";

for($i = 1; $i <= 5; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for($i = 1; $i <= 5; $i++){
    for($j = 5; $j >= $i; $j--){
        echo "*";
    }
    echo "<br>";
}

?>