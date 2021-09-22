<?php

require 'helpers.php';

// array_map(callable|null $callback, array $array, array ...$arrays): array

$array1 = ['a' => 1, 'b' => 2];
$array2 = ['d' => 4, 'e' => 5, 'f' => 6];

$array = array_map(fn($number1, $number2) => $number1 * $number2, $array1, $array2);

prettyPrintArray($array);