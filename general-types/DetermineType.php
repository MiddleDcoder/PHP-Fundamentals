<?php

define('CHECK_CONSTANT', "Yes, I am a constant!");

$intVar = 1234;
$stringVar = "I'm a String";
$boolVAr = false;
$floatVar = 12.34;

echo is_int($intVar); // find an integer value #1 true
echo is_int($floatVar); //cannot be display because it is not an integer value #false

echo is_string($stringVar); //check string

echo is_bool($boolVAr); //check boolean

echo is_float($floatVar); //check float

echo define('NEW_CONSTANT'); //check constant