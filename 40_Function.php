<?php

function sayHello()
{
    echo "Hello saya adalah sebuah function yang bernama sayHello" . PHP_EOL;
}
sayHello();

$buatFunction = true;
if ($buatFunction) {
    function hi()
    {
        echo "Hi" . PHP_EOL;
    }
}
hi();
