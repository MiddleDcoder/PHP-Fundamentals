<?php

function bookByAuthor($authorName){
    echo $authorName;
}

$authorName = "William Shakespeare";


bookByAuthor($authorName);
bookByAuthor("William Shakespeare");

function bookByAuthorYear($authorName1, $year){

    echo $year;
    echo "\n";
    echo $authorName1;
}

$year = 1910;
$authorName1 = "William Shakespeare";

bookByAuthorYear($authorName1, $year);