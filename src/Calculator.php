<?php

namespace App;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
    
    public function subtract($a, $b)
    {
        return $a - $b;
    }
    
    public function multiply($a, $b)
    {
        return $a * $b;
    }
    
    public function divide($a, $b)
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division par zéro impossible");
        }
        return $a / $b;
    }

    public function power($a, $b) 
    { 
        return pow($a, $b); 
    }

    public function squareRoot($a) { 
        if ($a < 0) { 
            throw new ("Racine carrée d\'un négatif impossible"); 
        } 
        return sqrt($a); 
    }
}