<?php

// --------------------------------
// -- PDO Example
// --------------------------------

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "phpfundamentals";

$connection = new PDO('mysql:host='.$dbServer.';dbname='.$dbName, $dbUserName, $dbPassword); //the difference is that by adding the mysql:host and dbname 

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObj = $connection->query($query);

if($resultObj->rowCount() > 0) //then instead num_rows we use rowCount
{
    foreach($resultObj as $singleRowFromQuery)
    {
        //then use foreach instead while loop
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
        echo "<br />";
    }
}

$resultObj = null; //then closing the connection by equaling to null
$connection = null;