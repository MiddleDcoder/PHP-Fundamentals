<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "phpfundamentals";

$connection = new mysqli(
    $dbServer,
    $dbUserName,
    $dbPassword,
    $dbName
);


print_r($connection);
//connect_errno - short for error number //and connect_error gives a human readable error message 
if($connection->connect_errno){
    //this exit function will terminate the script and print out the message that we passed
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

# $query = "DELETE FROM Authors WHERE id = 4"; //delete query

#$query = "UPDATE Authors SET pen_name='L. M. Montgomery' WHERE id=2"; //update query

#$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Arthur Ignatius Conan', 'Doyle', 'Sir Arthur Ignatius Conan Doyle')"; // insert query

// $connection->query($query); //for testing the update, delete, insert

$query = 'SELECT * FROM Authors'; //select query

//TESTING SELECT - EXAMPLE REAL WORLD IS VIEWING THE DATA
$result = $connection->query($query); //for testing the select

echo "<br />";

foreach($result as $row){
    print_r($row);
    echo "<br />";
}

$connection->close(); //close the connection