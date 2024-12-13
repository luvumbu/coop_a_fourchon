<?php

use PHPUnit\Framework\TestCase;

class AsciiConverterTest extends TestCase
{
    // Test de la méthode asciiToString
    public function testAsciiToString()
    {
        // Cas normal
        $asciiString = "72, 101, 108, 108, 111";
        $expectedOutput = "Hello";
        $this->assertEquals($expectedOutput, AsciiConverter::asciiToString($asciiString));

        // Cas avec espaces supplémentaires
        $asciiStringWithSpaces = " 72 , 101 , 108 , 108 , 111 ";
        $this->assertEquals($expectedOutput, AsciiConverter::asciiToString($asciiStringWithSpaces));

        // Cas avec des valeurs non numériques
        $asciiStringWithInvalidValues = "72, abc, 101, 108, , 108, 111";
        $this->assertEquals($expectedOutput, AsciiConverter::asciiToString($asciiStringWithInvalidValues));

        // Cas vide
        $emptyAsciiString = "";
        $this->assertEquals("", AsciiConverter::asciiToString($emptyAsciiString));
    }

    // Test de la méthode stringToAscii
    public function testStringToAscii()
    {
        // Cas normal
        $string = "Hello";
        $expectedOutput = "72,101,108,108,111";
        $this->assertEquals($expectedOutput, AsciiConverter::stringToAscii($string));

        // Cas avec une chaîne vide
        $emptyString = "";
        $this->assertEquals("", AsciiConverter::stringToAscii($emptyString));

        // Cas avec des caractères spéciaux
        $specialCharsString = "Hi!";
        $expectedSpecialCharsOutput = "72,105,33";
        $this->assertEquals($expectedSpecialCharsOutput, AsciiConverter::stringToAscii($specialCharsString));
    }

    // Test croisé pour s'assurer de la réversibilité des méthodes
    public function testReversibility()
    {
        $originalString = "Test";
        $asciiString = AsciiConverter::stringToAscii($originalString);
        $convertedString = AsciiConverter::asciiToString($asciiString);
        
        $this->assertEquals($originalString, $convertedString);
    }
}

?>
