<?php

$names = ["Indra", "Popi", "Nasha", "Nasywa"];

// Menggunakan for
for ($i = 0; $i < count($names); $i++) {
    echo "Hello $names[$i]" . PHP_EOL;
}

// Menggunakan foreach
foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

// Foeach dengan key / map
$namalengkap = [
    "nama_depan" => "indra",
    "nama_belakang" => "rizkiawan",
    "umur" => 34
];

foreach ($namalengkap as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
