<?php

$dbPassword = "root";
$dbUserName = "root";
$dbServer = "localhost:8889";
$dbName = "test_database";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

?>