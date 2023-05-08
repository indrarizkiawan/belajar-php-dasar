<?php
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("indra", "strtoupper");
sayHello("INDRA", "strtolower");
