<!DOCTYPE html>

<?php

echo "<pre>";
//print_r($_POST);
echo "</pre>";

// $_POST['author'];

?>

<html>
    <head>
        <title>PHP Fundamentals</title>
		<link href="assets/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
		<div id="Header">
			<img src="assets/Dickens_Gurney_head.jpg" border="0" alt="">
			<h2>
				Mailing List Information
			</h2>
		</div>        
        <div id="Body">
            <div>
                <label>Favorite Author:</label> 
                <span><?=$_POST['author']?> </span>
                <br />
            </div>		
            <div>
                <label>Favorite Century:</label>
                <span> <?=$_POST['century']?></span>
                <br />
            </div>
            <div>
                <label>Comments:</label>
                <span>  <?=$_POST['comments']?></span>
                <br />
            </div>
            <div>
                <label>Name:</label>
                <span>  <?=$_POST['name']?></span>
                <br />
            </div>
            <div>
                <label>E-mail Address:</label>
                <span>  <?=$_POST['email']?></span>
                <br />
            </div>
            <div>
                <label>Receive Newsletter:</label>
                <span>  <?=$_POST['newsletter']?></span>
                <br />
            </div>
        </div>
	</body>
</html>