<?php
//Initial Parameter Passing

class Person{
    
    const AVG_LIFE_SPAN = 79;

    public  $firstName;
    public  $lastName;
    public  $yearBorn; 

    //Constructor
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "")
    {
        //echo "I'm in the constructor";
        $this->firstName = $tempFirst; //altering the parameter variable
        $this->lastName = $tempLast;
        $this->yearBorn = $tempBorn;
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
    public function getLastName()
    {
        return $this->lastName;
    }
    
  public function setLastName($tempName)
    {   
        // $this is a pseudo variable in php
        $this->lastName = $tempName;

    }
    public function getYearBorn()
    {
        return $this->yearBorn;
    }
    
  public function setYearBorn($tempName)
    {   
        // $this is a pseudo variable in php
        $this->yearBorn = $tempName;

    }
}
//Methods in php is just functions inside of a class 
$myObject = new Person("Jhun Lorenz", " Asna ", 1999); //Now give value to the 3 parameters by altering the object

echo $myObject->getFirstName();
echo $myObject->getLastName();
echo $myObject->getYearBorn();
