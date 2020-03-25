<?php

function bookByAuthorYear($temAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";
    echo $temAuthorName;
    echo "\n"; 
}

function getAuthor(){
    return "Charles Dickens";
}


    $year = 1920;
    $authorName = getAuthor();

    bookByAuthorYear($authorName, $year);
