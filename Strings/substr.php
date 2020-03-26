<?php

$quote = "Only those who will risk going too far can possibly find out how far one can go.";
//remove the Only world as 4 characters 01234 including the space
echo substr($quote, 4);
//if negative value will run through the last
echo "\n";
echo substr($quote, -4);// remove 4 characters start with the last
echo "\n";
echo substr($quote, 3, 5);// means with 3 parameter is start with 0123 and take 5 characters
echo "\n";
echo substr($quote, 3, -5); // start at 0123 which is y and will remove 5 characters at the end starting.