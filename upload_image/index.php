<?php
	$msg = "";
	if (isset($_POST['upload'])) {
		$target = "images/".basename($_FILES['image']['name']);
		$db = mysqli_connect("localhost:8889", "root", "root", "photos");
		$image = $_FILES['image']['name'];
		$text = $_POST['text'];
		$sql = "INSERT INTO images (image, text) VALUES ('$image', '$text')";
		mysqli_query($db, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
	}
?>
<!DOCTYPT html>
<html>
	<head>
		<title>Image Upload</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="content">
            
          <!--  <?php
                $imageSelect="Select * from images";
            $result=mysqli_query($db,$imageSelect);
            while($row=mysqli_fetch_array($result)){
                echo "<div id='img_div'>";
                    echo "<img src='images/".$row['image']."' >";
                echo "<p>".$row['text'],"</p>";
                echo "<div />";
            }
            
            ?> -->
            
			<form method="post" action="index.php" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000" />
				<div>
					<input type="file" name="image" />
				</div>
				<div>
					<textarea name="text" cols="40" rows="4" placeholder="Say Something about This Image ..."></textarea>
				</div>
				<div>
					<input type="submit" name="upload" value="upload image">
				</div>
			</form>
		</div>
	</body>
</html>