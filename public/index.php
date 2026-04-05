<?php

require_once __DIR__ . '/../src/Calculator.php';

use App\Calculator;

$calc = new Calculator();

echo "=== CALCULATRICE PHP ===\n\n";
echo "10 + 5 = " . $calc->add(10, 5) . "\n";
echo "10 - 5 = " . $calc->subtract(10, 5) . "\n";
echo "10 x 5 = " . $calc->multiply(10, 5) . "\n";

try {
    echo "10 ÷ 5 = " . $calc->divide(10, 5) . "\n";
    echo "10 ÷ 0 = " . $calc->divide(10, 0) . "\n";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "\n";
}