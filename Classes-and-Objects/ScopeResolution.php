<?php

class Person{
    
    const AVG_LIFE_SPAN = 79;

    private  $firstName;
    private  $lastName;
    private  $yearBorn; 

    //Constructor
    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {

        $this->firstName = $tempFirst; //altering the parameter variable
        $this->lastName = $tempLast;
        $this->yearBorn = $tempYear;
    }

    //this is a method
  public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }

  public function setFirstName($tempName)
    {   
        // $this is a pseudo variable in php
        $this->firstName = $tempName;

    }
  protected function getFullName()
  {
      return $this->firstName." ".$this->lastName.PHP_EOL;
  }
}

class Author extends Person{

    public static $centuryPopular = "19th"; //static property
    private $penName = "Mark Twain";

    public function getPenName()    
    {
        return $this->penName.PHP_EOL;
    }    
    
    public function getCompleteName()    
	{
        return $this->getFullName()." a.k.a. ".$this->penName.PHP_EOL;
    }
    
    public static function getCenturyAuthorWasPopular()
    {
        //when returning a static property don't need the pseudo variable $this which we use the self keyword 
        return self::$centuryPopular;
        //when dealing with a static method or property from a parent class instead of using self we use parent
    }
}

echo Author::$centuryPopular; //accessing a static property #note including the $ sign not like to object operator that don't need the dollar sign
echo PHP_EOL;
echo Author::getCenturyAuthorWasPopular(); //calling a static method inside of a class