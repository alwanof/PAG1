<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "noor";
$age = 22;
$isStudent = true;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [11,2,32,43,5,6,7,8,9];
$person = ["ali"=> 1 , "abdullah"=> 22 , "asma"=> 21 , "noor"=> 11, "safa"=> 19 ];

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = ' ';
if ($age % 2 == 0 )
{
    $result "your age is even"."<br>";
}
else 
{
    $result "your age is odd";
}
// your code here..


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
foreach ( $numbers as $number ) {

 if ($number %2 == 1)   
 {
    $oddarr [ ] = $number ;
}
}
// your code here..

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/
function repeatString($integer, $string)
{
    $result = '';
    for($i = 0; $i < $integer; $i++)
    {
        $result = $result.$string;
    }
    return $result;
}
// your code here..
