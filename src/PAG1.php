<?php

$name = "Alaa";
$age = 23;
$isStudent = true;


$numbers = [9,6,7,19,2,4,11,17,8];
$person =[
        "manager" => "Alaa",
        "developer" => "Mohamed",
        "test" => "Mohanad",
        "designer" => "Azize",
        "HR" => "Ahmed",
        "social medis" => "WWP"
    ];

$result = " ";

if($age % 2 == 0){
    $result = "Your age is even";
}
else{
    $result = "Your age is odd";
}


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


function repeatString($repeat , $statement){
    for($i = 0; $i < $repeat; $i++){
        echo $statement;
    }
}


