<?php

require 'helpers.php';

// array_combine(array $keys, array $values): array

$array1 = ['a', 'b', 'c', 'd'];
$array2 = [5, 10, 15];

prettyPrintArray(array_combine($array1, $array2));