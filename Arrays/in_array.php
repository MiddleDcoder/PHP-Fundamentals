<?php

$authors = array(
    "Charles Dickens", 
    "Jane Austin", 
    "William Shakespeare",
    "Mark Twain",
    "Louisa May Alcott",
    13
);

//find if the value exist inside an array
echo in_array("Jane Austin", $authors);  
//returns 1 means true
//if no returns false
echo "\n";
echo in_array(13, $authors, true);  //the 3rd parameters is to check if the type is the same