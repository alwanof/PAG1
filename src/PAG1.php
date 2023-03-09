<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "albaraa";


$age = 18;


$isStudent = true;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [1, 3, 5, 7, 9, 10];

//sorry for confusion I thought it was person*s* not person
$person = [
	"name"=> "albaraa",
	"age"=> 18,
	"hobby"=> "programming",
	"major"=> "computer engineering",
	"university"=> "sabahattin zaim"
];

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/


$result = '';

if($age%2 == 1)
	$result = "Your age is odd";
else
	$result = "Your age is even";


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];

foreach($numbers as $num){
	if($num%2 == 1){
		$oddarr[] = $num;
	}
}

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

function repeatString($in ,$str){
	$fresult = "";
	for($i=0;$i<$in;$i++)
		$fresult = $fresult . $str;
	return $fresult;
}

?>
