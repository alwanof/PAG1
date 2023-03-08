<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "Nafie";


$age = 36;


$isStudent = true;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [13, 46, 7, 24, 51];

$person = [
    "name"=>"Nafie",
    "age"=>30,
	"hobby"=>"programming",
	"language"=>"arabic",
	"location"=>"istanbul"];

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = '';
// your code here..

if($age%2==0){
    echo $result="Your age is even";
}else{
    echo $result="Your age is odd";
}

/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
// your code here..
foreach($numbers as $n){
    if($n%2 != 0){
    array_push($oddarr, $n);
}};
print_r($oddarr);

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

// your code here..

function repeatString($number_of_repeating, $name) {
    for($i=0; $i<$number_of_repeating; $i++){
        echo $name;
    }
}
