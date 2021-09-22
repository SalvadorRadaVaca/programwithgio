<?php

require 'helpers.php';

$array = ['d' => 3, 'b' => 1, 'c' => 4, 'a' => 2];

prettyPrintArray($array);

usort($array, fn($a, $b) => $b <=> $a);

prettyPrintArray($array);