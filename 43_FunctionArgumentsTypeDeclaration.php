<?php
function sum(int $first, int $second)
{
    $total = $first + $second;
    echo "Hasil : " . $total . PHP_EOL;
}
sum(10, 10);
sum("10", '10');
sum(true, false);
// sum([], []); error
