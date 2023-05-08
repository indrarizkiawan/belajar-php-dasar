<?php
function increment(int &$value): int
{
    return $value--;
}
$counter = 1;
increment($counter);
echo $counter . PHP_EOL;
$counter = 2;
increment($counter);
echo $counter . PHP_EOL;
