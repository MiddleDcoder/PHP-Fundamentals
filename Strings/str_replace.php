<?php
$quote = "To be or not to be? That is the question.";

$replaced = str_replace("be", "know", $quote);
//string replace consist of 3 or 4 parameter
echo $replaced;
echo "\n";

$replaced = str_replace("be", "know", $count);

echo $count;  //the 4th parameter will count how many times the word being replaced
