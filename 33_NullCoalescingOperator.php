<?php
$data = [
    "action" => null
];

// Non Null Coalescing Operator
if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "nothing";
}
echo $action . PHP_EOL;

// Null Coalescing Operator
$action = $data["action"] ?? "nothing";
echo $action . PHP_EOL;
