<?php

include 'Person.php';
include_once 'Author.php';
//it can also be use with another folder or HTTP request
//using include is ideal for files that contain classes or functions
$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->getCompleteName();