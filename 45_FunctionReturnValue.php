<?php
// Return Value Versi 1
function returnValue(int $angka1, int $angka2)
{
    return "Hasil Penjumlahan $angka1 + $angka2 = " . $angka1 + $angka2;
}

$cetak = returnValue(2, 2);
echo $cetak . PHP_EOL;

// Return Value Versi 2
function getFinalValue(int $value)
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
