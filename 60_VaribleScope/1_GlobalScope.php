<?php
$name = "Indra";

function sayHello()
{
    global $name;
    echo "Hello $name" . PHP_EOL;
}
sayHello();
