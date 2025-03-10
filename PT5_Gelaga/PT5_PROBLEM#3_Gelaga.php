<?php
    echo "Enter the Upper Limit: 4";
    echo "<br>";
    $i = 1;
    $N = 4;
    $SS = 0;
    $CS = 1;
    do {
        $SS += $i * $i;
        $CS += $i * $i * $i;
        $i++;

    } while($i <= 4);
    echo "The Sum of Squares from 1 to 4 is: $SS";
    echo "<br>";
    echo "The Sum of Cubes from 1 to 4 is: $CS";
?>