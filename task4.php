<?php
function printFibonacci($n) {
    $first = 0;
    $second = 1;

    echo "The $n Fibonacci numbers are: ";

    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";

        $third = $first + $second;
        $first = $second;
        $second = $third;
    }
}

printFibonacci(15);
?>