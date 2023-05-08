<?php
goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello Goto A" . PHP_EOL;

$counter = 1;

while (true) {
    echo "Hello break ke-" . $counter . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    }
}
end:
echo "End loop" . PHP_EOL;
