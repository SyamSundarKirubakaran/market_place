<?php

$dbUser="root";
$dbPassword="root";
$dbServer="localhost:8889";
$dbName="test_database";


//Port and Socket Parameters are optional
$connection=new mysqli($dbServer,$dbUser,$dbPassword,$dbName);

//print_r($connection);

if($connection->connect_errno){
    //echo "Database Connection Failed.. Reason ".$connection->connect_error;
    exit("Database Connection Failed.. Reason ".$connection->connect_error);
}else{
   echo "Connection Successfully made...";
    
    //$query="delete from Author where id=3";
    //$query="Update Author set first_name='Sundar' where id=4";
    //$query="INSERT INTO Author(first_name, last_name, pen_name) VALUES ('Susanth','Kishna',NULL)";
    $query="SELECT * FROM `Author` ORDER BY id";
    
    $resultObj=$connection->query($query);
    
    //echo "The ID of the New Record inserted is: ". $connection->insert_id;
    
    if($resultObj->num_rows>0){
        while($singleObj=$resultObj->fetch_assoc()){
            //print_r($singleObj);
            echo "Author: ".$singleObj['first_name']."\\\\\\".PHP_EOL;
        }
        
    }
    
    $resultObj->close();
    
}

if($connection->close()){
    //echo "Connection Successfully Terminated...";
}