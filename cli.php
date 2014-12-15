<?php

require_once 'reverse_polish_notation.php';

$process = new RealTimeCLI;
$method = new ReversePolishNotation;

$result = process($process, $method);
echo "Result: " . $result . "\n";