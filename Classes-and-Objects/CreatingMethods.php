<?php

class Person{
    
    const AVG_LIFE_SPAN = 79;

    public  $firstName = "Jhun Lorenz";
    public  $lastName = "Asna";
    public  $yearBorn = 1999; 

    //this is a method
  public function getFirstName()
    {

    }
    
  public function setFirstName($tempName)
    {

    }
}
//Methods in php is just functions inside of a class 
$myObject = new Person(); 
