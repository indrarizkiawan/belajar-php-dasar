<?php
function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Indra", function ($name) {
    return strtolower($name);
});

sayHello("indra", fn ($name) => strtoupper($name));
sayHello("indra", "strtoupper");
sayHello("INDRA", "strtolower");
