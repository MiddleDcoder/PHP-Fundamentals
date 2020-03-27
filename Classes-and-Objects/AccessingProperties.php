<?php

class Person{
    
    public  $firstName = "Jhun Lorenz";
    public  $lastName = "Asna";
    public  $yearBorn = 1999; 
}

$myObject = new Person(); 

// -> object operator 
//accessing properties inside of a class  
echo $myObject->firstName."\n";

//overwrite
$myObject->firstName = "J. L";

echo $myObject->firstName;