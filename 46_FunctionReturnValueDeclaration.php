<?php
// Return Value Versi 1
function returnValue(int $angka1, int $angka2): int
{
    return $angka1 + $angka2;
}
echo returnValue(2, 2) . PHP_EOL;


// Return Value Versi 2
function getFinalValue(int $value): string
{
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }
}

$hasil = getFinalValue(90);
echo "Nilai Anda : " . $hasil . PHP_EOL;
