<?php
//Null Coalesce Operator ??
$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
// $count = count($authors); //if you comment this out the result will false (Count unavailable)
// $anotherVariable = 1;

// it question if the $count/variable has been set
// $outcome = $count ? $count : "Count unavailable"; 
// echo $outcome; 
#now using the null coalesce 
//is the $count variable true?
// $outcome = $count ?? "Count unavailable";  //is just the short way ternary operator above
$outcome = $count ?? $anotherVariable ?? "Count unavailable"; // you can also set as many as you can if the first variable has not set then move to the another variable

echo $outcome; 

#REAL WORLD EXAMPLE
  // fetch the value of $_GET['user'] and returns 'not passed'
/*
  // if username is not passed
   $username = $_GET['username'] ?? 'not passed';
   print($username);
   print("<br/>");

   // Equivalent code using ternary operator
   $username = isset($_GET['username']) ? $_GET['username'] : 'not passed';
   print($username);
   print("<br/>");
   // Chaining ?? operation
   $username = $_GET['username'] ?? $_POST['username'] ?? 'not passed';
   print($username);

   */