<?php

$authorName = "William Shakespeare";

function setAuthorName()
{
    global $authorName; //it only works inside of a function
    $authorName = "Charles Dickens";
}

setAuthorName();

echo $authorName;

?>