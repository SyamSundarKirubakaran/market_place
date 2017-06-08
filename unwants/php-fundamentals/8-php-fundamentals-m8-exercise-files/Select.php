<?php

// --------------------------------
// -- Select Records
// --------------------------------

/*

New:
    property - $result->num_rows;
    method - $result->fetch_assoc();

*/


$dbUser="root";
$dbPassword="root";
$dbServer="localhost:8889";
$dbName="test_database";

$connection = new mysqli($dbServer, $dbUser, $dbPassword, $dbName);


if($connection->connect_errno)
{
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}else{
    echo "Connection successful.."."<br>";
}

$query = "SELECT id,first_name,last_name FROM Author";
$resultObj = $connection->query($query);

if ($resultObj->num_rows > 0) 
{
    while ($singleRowFromQuery = $resultObj->fetch_array()) 
    {
        print_r($singleRowFromQuery);
        echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL."<br>";
    }
}


$resultObj->close();
$connection->close();