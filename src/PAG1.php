<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "Muhanned";


$age = 20;


$isStudent = true;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [1,2,3,4,5,6,7,8,9,10];


$person = ["name"=>"Muhanned",
          "work"=>"programming",
          "age"=>20,
          "stay"=>"Istanbul,Turkey",
          "talent"=>"writing",
          "expeince"=>"null"];

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = " ";
// your code here..
$m4= $age % 2;
if($m4 == 0){ 
   $result="Your age is even";
}else{
    $result= "Your age is odd";
}


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
// your code here..
for($i = 0;$i < count($numbers);$i++ ){
  $math30= $i % 2;
    if($math30 != 0){
    $oddarr[]= $i;
    }
}
print_r($oddarr);
/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

// your code here..
function repeatString($int, $str){
    for ($i = 0 ; $i < $int ; $i++){
        echo $str;
        echo "</br>";  
    }
     }
?>
