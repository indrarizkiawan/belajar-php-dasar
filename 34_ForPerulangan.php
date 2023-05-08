<?php
// For loop
// Perulangan tanpa henti
// for (;;) {
//     echo "Hello Perulangan tanpa henti menggunakan for" . PHP_EOL;
// }

// Perulangan dengan kondisi
// $counter = 1;
// for (; $counter <= 10;) {
//     echo "Hello Perulangan tanpa henti menggunakan for ke $counter" . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan ini statement
// for ($counter = 1; $counter <= 10;) {
//     echo "Hello Perulangan tanpa henti menggunakan for ke $counter" . PHP_EOL;
//     $counter++;
// }

// Perulangan dengan post statement
// for ($counter = 1; $counter <= 10; $counter++) {
//     echo "Hello Perulangan tanpa henti menggunakan for ke $counter" . PHP_EOL;
// }
// Perulangan dengan post statement alternatif
for ($counter = 1; $counter <= 10; $counter++) :
    echo "Hello Perulangan tanpa henti menggunakan for ke - " . $counter . PHP_EOL;
endfor;
