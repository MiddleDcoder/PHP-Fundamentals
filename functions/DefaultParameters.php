<?php

function bookByAuthorYear($temAuthorName, $tempYear = 1910)
{
    echo $tempYear;
    echo "\n";
    echo $temAuthorName;
    echo "\n"; 
}
    $year = 1920;
    $authorName = "William Shakespeare";

    bookByAuthorYear($authorName, $year);
    bookByAuthorYear($authorName);