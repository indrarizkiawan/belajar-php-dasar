<?php
$angka = array(1, 2, 3, 4, 5, 6, 7);
// $array[index] -> Mengakses data di array pada nomor index
var_dump($angka[6]);
// $array[index] = value -> Mengubah data di array pada nomor index dengan value baru
$angka[6] = 100;
// $array[] = value -> Menambah data di array pada posisi paling belakang
$angka[] = 8;
// unset($array[index]) -> Menghapus data di array, index otomatis hilang dari array
unset($angka[6]);
var_dump($angka);
// count($array) -> Mengambil total data di array
var_dump(count($angka));
echo "==============================" . PHP_EOL;
$names = ["indra", "popi", "nasha", "nashywa"];
// $array[index] -> Mengakses data di array pada nomor index
// $array[index] = value -> Mengubah data di array pada nomor index dengan value baru
// $array[] = value -> Menambah data di array pada posisi paling belakang
// unset($array[index]) -> Menghapus data di array, index otomatis hilang dari array
// count($array) -> Mengambil total data di array
echo "==============================" . PHP_EOL;
// Membuat Map
$indra = [
    "id" => "indra",
    "name" => "Indra Rizkiawan",
    "age" => 34
];
var_dump($indra);
$popi = [
    "id" => "popi",
    "name" => "Popi Afriani",
    "age" => 32
];
var_dump($popi);
var_dump($indra["id"]);
var_dump($indra["name"]);
var_dump($indra["age"]);

// Array Didalam Array
$biodata = [
    "id" => "indrarizkiawan",
    "name" => "Indra Rizkiawan",
    "age" => 34,
    "address" => [
        "city" => "Aceh",
        "country" => "Indonesia"
    ],
];
var_dump($biodata["address"]);
