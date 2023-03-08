<?php
/* Task1: Declare and initialize 3 variables of different data types:
     name(string), 
     age(integer), 
     and isStudent(boolean).*/

$name = "ismail yehia";
echo $name

$age = 21;
echo $age

$isStudent = true;
echo $Student;

/*task2: Create an indexed array named (numbers) and an associative array named (person), 
each with at least 5 elements.*/

$numbers =[20,30,40,50,60,70,80,90];
print_r ($numbers[3]);


$person =[
    "name"=> "ismail",
    "email"=>"esmael12kg@gmail.com",
    "age"=>20,
    "pass"=>[
        "programming",
        "sport",
         "playing chess"
        ]
     echo $user["pass"][2];
    
    ];

/* task3: Write a conditional statement using if-else to check if age declared in task 1 is odd or even, 
look (result) variable and assign to it: 
- "Your age is even" in case of even 
- "Your age is odd" in case of odd.*/

$result = '';
if($age % 2 == 0) {
    $result = "your age is even";
} else {
    $result = "your age is odd";
}
echo $result;
// your code here..


/* task4: Use some kind of loop to iterate over each element in the indexed array(numbers) created in task 2 , 
- look (oddarr) : it's new array should contains each odd element.*/
$oddarr = [];
$numbers =array(20,30,40,50,60,70,80,90);
$oddar=array();
foreach($numbers as $number){
if($numbers % 2 !==0){
     echo ($oddar, $numbers);
     
   }else{
     return 0;
 }
}
print_r($oddar);
// your code here..

/* task5:Write a custom function named: 
(repeatString) that takes 2 arguments, an integer and a string, 
and returns the string repeated the number of times specified by the integer.*/

function repeatString($num ,$string) {
     $result = "";
     for($i = 0 ; $i <$num ;$i++) {
          $result = $string;
     }
     return $result;
}
     

// your code here..
