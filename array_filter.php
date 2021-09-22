<?php

require 'helpers.php';

// array_filter(array $array, callable|null $callback = null, int mode = 0): array

$array = [1, 2, 3, 4, 5, false, [], 0, 9, 0.0];

$even = array_filter($array);

$even = array_values($even);

prettyPrintArray($even);