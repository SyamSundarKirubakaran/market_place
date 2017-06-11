<?php

$dbUser="root";
$dbPassword="root";
$dbServer="localhost:8889";
$dbName="final_db";
$email="k.syamsundar21@gmail.com";
$connection=new mysqli($dbServer,$dbUser,$dbPassword,$dbName);
$query="Select * from sign_up where email='$email'";
$resultObj=$connection->query($query);
$row=$resultObj->fetch_assoc();
//print_r($resultObj);
//print_r($row);

session_start();

$_SESSION['name']=$row;
print_r($_SESSION['name']);

?>