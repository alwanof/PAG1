<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "Alaa";
$age = 23;
$isStudent = true;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [9,6,7,19,2,4,11,17,8];
$person =[
        "manager" => "Alaa",
        "developer" => "Mohamed",
        "test" => "Mohanad",
        "designer" => "Azize",
        "HR" => "Ahmed",
        "social medis" => "WWP"
    ];

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = " ";

if($age % 2 == 0){
    $result = "Your age is even \n";
}
else{
    $result = "Your age is odd \n";
}

/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
$i = 0;
$j = 0;
while($i < count($numbers)){
    if($numbers[$i] % 2 != 0){
        $oddarr[$j] = $numbers[$i];
        $j++;
    }        
    $i++;
}
/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

function repeatString($repeat , $statement){
    for($i = 0; $i < $repeat; $i++){
        echo $statement . " \n";
    }
}


