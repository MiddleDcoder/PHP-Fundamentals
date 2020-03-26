<?php

$currency = 'penny';

$sampleString = "A $currency saved is a $currency earned.";

echo $sampleString;

$var = 2;
echo "\n";
echo "{$var}nd place";
echo "\n";
echo $var."nd place";
echo "\n";
$misc = "St. Patrick's Day";
echo $misc;
echo "\n";
$misc = "St. Patrick\"s Day"; //double quotes inside a string can be fix using backslash
echo $misc;