<?php

$sayHello = function (string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
};

$sayHello("indra rizkiawan", "strtoupper");
$sayHello("INDRA RIZKIAWAN", "strtolower");
