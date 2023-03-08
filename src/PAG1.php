<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "Abdurrahman";


$age = 25;


$isStudent = 3,5;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [1,2,3,4,5,6,7,8,9,10];

$person = [
     "prsonel info"=>[
     "name"=>"ahmed",
     "age"=>25,
     "e-posta"=>"a.yilidririm@gmail.com",
     ],
     "skills"=>[
     "programming",
     "teaching",
     "work hard",
     ],
     ];
     print_r ($person);
     
     

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result =$age;

if ($result%2==0) {
  echo "Your age is even";
} else {
  echo "Your age is odd";
}



/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
$numbers = array(1,2,3,4,5,6,7,8,9,10);
function math($numbers)
{
    return ($numbers & 1);
}
$oddarr = array_filter($numbers, "math");

$oddarr = array_values(array_filter($oddarr));

print_r($oddarr);

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

function repeatString($str , $n){
    
 
}
echo str_repeat("hasan ", 2 ."<br>" );
