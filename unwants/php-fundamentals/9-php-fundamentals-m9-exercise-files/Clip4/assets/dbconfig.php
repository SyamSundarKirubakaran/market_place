<?php
$dbUser="root";
$dbPassword="root";
$dbServer="localhost:8889";
$dbName="test_database";
$connection=new mysqli($dbServer,$dbUser,$dbPassword,$dbName);

//print_r($connection);

if($connection->connect_errno){
    //echo "Database Connection Failed.. Reason ".$connection->connect_error;
    exit("Database Connection Failed.. Reason ".$connection->connect_error);
}

?>