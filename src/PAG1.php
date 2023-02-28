<?php
// Task1: Define variables
// Define a string variable
$name = 'Murad';

// Define a numeric variable
$age = 41;

// Define a boolean variable
$isStudent = true;

//task2: Define arrays
// Define a numeric array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Define an associative array

$person = [
    'name' => 'Murad',
    'age' => 41,
    'isStudent' => true,
    'email' => 'free1soft@gmail.com',
    'phone' => '123456789',
];
// task3:
// check if a age is odd or even
// if age is even, set $result to "Your age is even"
// if age is odd, set $result to "Your age is odd"

$result = '';
// your code here..
if ($age % 2 == 0) {
    $result = "Your age is even";
} else {
    $result = "Your age is odd";
}


// task4:
// add all odd numbers in [numbers] array to [oddarr] array
$oddarr = [];
// your code here..
foreach ($numbers as $number) {
    if ($number % 2 != 0) {
        $oddarr[] = $number;
    }
}
// task5: Define a repeatString
// repeatString(3, "Hello") returns "HelloHelloHello"
// your code here..
function repeatString($times, $string)
{
    $str = '';
    for ($i = 0; $i < $times; $i++) {
        $str .= $string;
    }
    return $str;
}
