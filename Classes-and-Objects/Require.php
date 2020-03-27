<?php

include 'Person.php';
include_once 'Author.php';

require 'Random.php';
//include will run even the rest of the scripts even it has an error
//require will not run the rest of the scripts  when there is error

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->getCompleteName();