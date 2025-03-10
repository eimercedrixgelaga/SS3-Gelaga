<?php
echo "Enter N: 6"; 
echo "<br>";
$N = 6;
$i = 1;
$sum = 0.0;
do {
    $sum += 1.0 / $i;
    $i++;
    } while ($i <= $N);
    echo "Sum is $sum";
?>
