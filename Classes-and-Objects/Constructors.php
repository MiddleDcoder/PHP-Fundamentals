<?php

class Person{
    
    const AVG_LIFE_SPAN = 79;

    public  $firstName;
    public  $lastName;
    public  $yearBorn; 

    //Constructor
    function __construct()
    {
        //echo "I'm in the constructor";
        $this->firstName = "Jhun Lorenz";
        $this->lastName = "Asna";
        $this->yearBorn = 1999;
    }

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

echo $myObject->getFirstName();
