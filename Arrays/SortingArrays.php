<?php
//index array
$authors = array(
    "Charles Dickens", 
    "Jane Austin", 
    "William Shakespeare",
    "Mark Twain",
    "Louisa May Alcott"    
);
//associative array
$authorsAssociative = array(
    "poetic" => "William Shakespeare",
    "brilliant" => "Jane Austin",
    "quarky" => "Charles Dickens"
  
);

// sort($authors);
// print_r($authors);
// sort($authorsAssociative);
// print_r($authorsAssociative); //you will get index after sorting not the key
echo "\n";
asort($authors);//this will asort the value but the key is not affected or key is preserve
print_r($authors);
/* [0] => Charles Dickens
    [1] => Jane Austin
    [4] => Louisa May Alcott
    [3] => Mark Twain
    [2] => William Shakespeare
*/
    
asort($authorsAssociative); //this will result both key and value sorted
print_r($authorsAssociative); 
/*
   [quarky] => Charles Dickens
    [brilliant] => Jane Austin
    [poetic] => William Shakespeare
*/
#note sorting an associative array asort() is the best bet

ksort($authorsAssociative);//arrange the array by key
print_r($authorsAssociative); 
