<?php

class Person{
    
    const AVG_LIFE_SPAN = 79; //constant

    //properties
    public  $firstName = "Jhun Lorenz";
    public  $lastName = "Asna";
    public  $yearBorn = 1999; 

    //this is a method
  public function getFirstName()
    {
        return $this->firstName;
    }
    
  public function setFirstName($tempName)
    {   
        // $this is a pseudo variable in php
        $this->firstName = $tempName;

    }
}
//Methods in php is just functions inside of a class 

$myObject = new Person(); 
//Accessing Methods inside of class
$myObject->setFirstName("Jhun");
// echo $myObject->firstName;
//other way to this instead of accessing the property we do by method
echo $myObject->getFirstName();