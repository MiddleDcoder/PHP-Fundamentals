<?php

class Person{

    const AVG_LIFE_SPAN = 79;
    
    public  $firstName = "Jhun Lorenz";
    public  $lastName = "Asna";
    public  $yearBorn = 1999; 
}

$myObject = new Person(); 
//:: double colon operator is called Scope Resolution Operator
//instead of using -> object operator to access a constant we use ::
echo $myObject::AVG_LIFE_SPAN;
//second way to access Constant using the class name
echo "\n";
echo Person::AVG_LIFE_SPAN;
