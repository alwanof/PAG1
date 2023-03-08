<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "mehmet";


$age = 23;


$isStudent = True;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [1,2,3,4,5];


$person = "name"=>"Mehmet",
    "surname"=>" sahinoglu",
    "BirthDay"=>"2000",
    "Department"=>"Computer Engineering",
    "E-mail"=>"University1337@gmail.com",;

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = '';
if($age % 2==0)
{
    echo "Your age is even";
    echo "<br>";
}
else
{
    echo "Your age is odd";
    echo "<br>";
}


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
foreach($numbers as $oddarr)
if(($oddarr&1))
{
echo $oddarr;
echo "<br>";
}

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

function repeatString($hobby,$times)
    {
      echo str_repeat($hobby,$times) ;
      
    }
    repeatString("Programming",5);
