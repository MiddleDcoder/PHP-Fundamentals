<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "phpfundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";

$resultObj = $connection->query($query);

if($resultObj->num_rows > 0 ){ //num_rows - inbuilt function which is used to return the number of rows present in the result set.
    while($singleRowFromQuery = $resultObj->fetch_assoc())
    {
        // print_r($singleRowFromQuery);
        // echo "<br />";
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
        echo "<br />";
    }
}

$resultObj->close(); //or $resultObj->free();
$connection->close();
