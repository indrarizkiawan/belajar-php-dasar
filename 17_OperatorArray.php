<?php
$firstName = [
    "first_name" => "Indra"
];

$lastName = [
    "last_name" => "Rizkiawan",
];
var_dump($firstName + $lastName);

$a = [
    "first_name" => "Indra",
    "last_name" => "Rizkiawan"
];
$b = [
    "last_name" => "Rizkiawan",
    "first_name" => "Indra"
];

var_dump($a == $b);
var_dump($a === $b);
