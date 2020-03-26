<?php
/*
Changes all the characters to be uppercase or all lowercase
These functions each take one parameter. 
1. String that will have it's case changed.
*/


$quote = "To be or not to be, that is the question.";

$quote = strtoupper($quote);

//$quote = strtolower($quote);

echo $quote;

$quotes = "TO BE OR NOT TO BE, THAT IS THE QUESTION.";

$quotes = strtolower($quotes);
//strt means string to lower/upper
echo "\n";
echo $quotes;
/*
Please note that the function returns a value that must 
be either saved to a variable or printed out directly.
*/