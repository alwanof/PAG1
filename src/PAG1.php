<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "aysha"; 
$age = 40; 
$isStudent = false; 

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers = [1,2, 3, 4, 5,6,7,8,9];

$person = [
    "name" => "Aysha",
    "age" => 40,
    "jop" => "web developer",
    "email" => "ayshaa@gmail.com",
    "phone" => "000000000"
 ];


/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/
if ($age % 2 == 0) {
    
    $result = "Your age is even";
} else {
    
    $result = "Your age is odd";
}

echo $result."<br>";


// your code here..


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
foreach ($numbers as $number) {
    
    if ($number % 2 != 0) {
        
        $oddarr[] = $number;
    }
}
foreach($oddarr as $value){
    echo $value."<br>";
}
// your code here..

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/
function repeatString($num, $str) {
    
    $result = "";
    
    
    for ($i = 1; $i <= $num; $i++) {
        $result .= $str;
    }
    
    
    return $result;
}


echo repeatString(5, " Hello "); 

// your code here..
