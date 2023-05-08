<?php
// NULL
$nama = "Indra";
$nama = NULL;

$age = null;
// CEK APAKAH VARIABLE NULL ATAU TIDAK
var_dump(is_null($nama));
var_dump(is_null($age));

// Menghapus Variable
$value = "Indra"; // variable bernilai
unset($value); // dihapus variable
var_dump($value); // menjadai undefined variable
isset($value); // set lagi variablenya
$value = "Popi"; // ubah isi variable
var_dump($value); // isi variable dan type data dan panjang character
