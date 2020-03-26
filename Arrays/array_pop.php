<?php

$authors = array(
        "Charles Dickens",
        "Jane Austin",
        "William Shakespeare"
);

//remove items from an array

$lastValue = array_pop($authors);
echo $lastValue;
echo "\n";
print_r($authors);