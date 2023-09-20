<?php
function printFibonacci($n) {
    $first = 0;
    $second = 1;

    echo "The first $n Fibonacci numbers are: ";

    for ($i = 0; $i < $n; $i++) {
        if ($first > 100) break;
        echo $first . " ";

        $third = $first + $second;
        $first = $second;
        $second = $third;
    }
}

printFibonacci(10);
?>