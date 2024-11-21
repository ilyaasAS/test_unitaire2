<?php

use PHPUnit\Framework\TestCase;

// Assurez-vous que la classe Calculator est incluse avant d'exécuter le test
require_once 'Calculator.php';

class CalculatorTest extends TestCase {


    public function test()
    {
        $calculator = new Calculator();
        $result = $calculator::multiply(a: 4,b: 3);
        
        // On vérifie que l'addition de 2 et 3 donne bien 5
        $this->assertEquals(12, $result);
    }
}
