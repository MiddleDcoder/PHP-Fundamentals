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

$connection->close(); //close the connection