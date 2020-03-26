<?php

$quote = "It is a melancholy truth that even great men have their poor relations.";

$varArray = str_split($quote); //convert string to an array
//to see array in a human readable format
print_r($varArray);
echo "\n";

$varArray = str_split($quote, 8); //with the second parameter it will print in array form with 8 characters each
print_r($varArray); 