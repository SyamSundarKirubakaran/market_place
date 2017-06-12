<?php

session_start();

//$sample=$_SESSION['name'];

if(isset($_SESSION['signin'])){
    echo "Set signin";
}else{
    echo "Signin not set";
}

//unset($_SESSION['name']);
print_r($_SESSION['name']);
echo $_SESSION['email'];
?>