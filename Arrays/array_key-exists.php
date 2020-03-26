<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);
//find if key exist inside an array
echo array_key_exists(2, $authors);
echo "\n";
echo $authors[1];
echo "\n";
echo array_key_exists('poetic', $authorsAssociative);
echo "\n";
echo $authorsAssociative['brilliant'];
