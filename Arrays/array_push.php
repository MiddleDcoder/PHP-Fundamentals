<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

array_push($authors, "Louise May Alcott"); //way to add array
//if you use array_push and array has not been declared it will throw an error
$authors[] = "L. M/ Montgomery"; //other way to add array
//when square brackets are use without array declared . array is created and added to an array

//but the preferred method to add an array is the array with square brackets array[]
print_r($authors); 