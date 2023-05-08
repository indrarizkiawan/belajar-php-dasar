<?php
function createName()
{
    global $name;
    $name = "Indra" . PHP_EOL;
    echo $GLOBALS["name"] . PHP_EOL;
}
createName();
echo $name;
