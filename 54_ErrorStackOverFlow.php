<?php
function loop(int $value): int
{
    if ($value == 0) {
        echo "Selesai" . PHP_EOL;
    } else {
        echo "Loop Ke-$value" . PHP_EOL;
        loop($value - 1);
    }
    return $value;
}

loop(3000000);
