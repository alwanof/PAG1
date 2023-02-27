<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/PAG1.php';

class VariTest extends TestCase
{
    public function testNameIsString()
    {
        global $name;
        $this->assertIsString($name);
    }

    public function testAgeIsInteger()
    {
        global $age;
        $this->assertIsInt($age);
    }

    public function testIsStudentIsBoolean()
    {
        global $isStudent;
        $this->assertIsBool($isStudent);
    }
    // test if $numbers is an indexed array and the length more than 4
    public function testNumbersIsArray()
    {
        global $numbers;
        $this->assertIsArray($numbers);
        $this->assertGreaterThan(4, count($numbers));
    }
    // test if $person is an associative array and the length more than 4
    public function testPersonIsArray()
    {
        global $person;
        $this->assertIsArray($person);
        $this->assertTrue(count(array_filter(array_keys($person), 'is_string')) > 0);
        $this->assertGreaterThan(4, count($person));
    }
    // test if echo "Your age is even" when $age is even and echo "Your age is odd" when $age is odd
    public function testAgeIsEvenOrOdd()
    {
        global $age;
        global $result;
        if ($age % 2 == 0) {
            $this->assertEquals("Your age is even", $result);
        } else {
            $this->assertEquals("Your age is odd", $result);
        }
    }
    // test if $oddarr contains all odd numbers in $numbers
    public function testOddArrContainsOddNumbers()
    {
        global $numbers;
        global $oddarr;
        $this->assertIsArray($oddarr);
        $this->assertGreaterThan(0, count($oddarr));
        foreach ($oddarr as $number) {
            $this->assertNotEquals(0, $number % 2);
            $this->assertContains($number, $numbers);
        }
    }
    // test if repeatString(3, "Hello") returns "HelloHelloHello"
    public function testRepeatString()
    {
        $this->expectOutputString("HelloHelloHello");
        repeatString(3, "Hello");
    }
}
