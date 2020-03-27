<?php
//Initial Parameter Passing

class Person{
    
    const AVG_LIFE_SPAN = 79;

    public  $firstName;
    public  $lastName;
    public  $yearBorn; 

    //Constructor
    function __construct($tempFirst = "", $tempLast = "", $tempYear = "")
    {
        echo "Person Constructor".PHP_EOL; //PHP_END OF LINE
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
  public function getFullName()
  {
      echo "Person->getFullName()".PHP_EOL;
      return $this->firstName." ".$this->lastName.PHP_EOL;
  }
}

class Author extends Person{
    public $penName = "Mark Twain";

    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }
    public function getFullName()
    {
        echo "Author->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

$newAuthor = new Author("Jhun Lorenz", " Asna ", 1999);
echo $newAuthor->getFullName();
    