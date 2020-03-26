<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

unset($authors[1], $authors[0]);
print_r($authors);

echo "\n";

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);

unset($authorsAssociative['poetic']);

print_r($authorsAssociative);

# unset($authors); //remove the array