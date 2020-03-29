<?php

$alterByOne = 2;

// $alterByOne++; //post increment
++$alterByOne;

echo $alterByOne; //if you do this here $alterByOne++ the result would be 2 because it will print out first before you do anything in the variable
//but if you do this ++$alterByOne it will result 3 because it will run the incrementor first before you do anything

echo PHP_EOL;

echo --$alterByOne; //pre decrementing 

