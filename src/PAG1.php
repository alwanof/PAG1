<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "Bashir";


$age = 25;


$isStudent = true;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = array(2,4,7,8,10);


$person = array(
    "name"=>"Bashir",
    "age"=>25,
    "school"=>"NisantasiUN",
    "Program"=>"computer Engineering",
    "country"=>"Syria"
);

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = 'Your age is odd';
// your code here..

if ($age % 2 == 0) {
  $result = "Your age is even";
} else {
  $result = "Your age is odd";
}


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [7];
// your code here..

$oddarr = array();
foreach ($numbers as $number) {
  if ($number % 2 != 0) {
    $oddarr[] = $number;
  }
}

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

// your code here..

function repeatString($num, $str) {
  $repeatedString = "";
  for ($i = 0; $i < $num; $i++) {
    $repeatedString .= $str;
  }
  return $repeatedString;
}

?>
