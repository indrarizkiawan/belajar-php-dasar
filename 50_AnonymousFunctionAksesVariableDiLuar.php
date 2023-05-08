<?php

$first_name = "Indra";
$last_name = "Rizkiawan";

$sayHello = function () use ($first_name, $last_name,) {

    echo "Hello $first_name $last_name" . PHP_EOL;
};

$sayHello();
