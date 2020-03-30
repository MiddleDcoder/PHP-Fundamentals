<?php
//Prepared Statement are good for working with forms and to avoid SQL Injection
//THIS PATTERN CAN BE USE WHEN SEARCHING DATA BY NAME USING USER INPUT
#PREPARED STATEMENT allow for outside user input to safely be used inside of a query. The idea is to help prevent any type of SQL Injection attacks
$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "phpfundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    die("Database Connection Failed. Reason: ".$connection->connect_error);
}

$tempFirstName = 'Lucy Maud'; //Temporary Input data 

$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?"; //WHERE return all of the author who's first name matches a specific word and the ? question mark is a place holder

$statementObj = $connection->prepare($query); //prepare let sql to send values later
$statementObj->bind_param("s", $tempFirstName);//for example $so->bind_param("sdi", $stringVar, $floatVar, $intVar);
$statementObj->execute();//this execute are query it takes the parameter and inserts them into the query string at the appropriate locations

#note if you're working with INSERT, UPDATE, DELETE, it's done here execute but in select is not yet need the code example below

$statementObj->bind_result($firstName, $lastName, $penName); //this will just be variables that co-inside with values that our query is returning
//since we are returning the first_name, last_name and pen_name by finding by first_name
$statementObj->store_result(); //store the bind result

if($statementObj->num_rows > 0 ){ //num_rows - inbuilt function which is used to return the number of rows present in the result set.
    while($statementObj->fetch())
    {
        echo $firstName." ".$lastName." (".$penName.")".PHP_EOL;

    }
}

$statementObj->close(); //note statementObj can only be close with close method than resultObj can be close either free() or close()
$connection->close();
