<!DOCTYPE html>

<?php

//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if (isset($_POST['submit'])) {
$db = mysqli_connect("localhost:8889", "root", "root", "final_db");
    $email=null;
$password=null;
$fname=null;
$lname=null;
$username=null;
$phone=null;
$age=null;
$gender=null;
$address=null;
$locality=null;
$twitter=null;
$email=$_POST['email'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$phone=$_POST['phone'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$locality=$_POST['locality'];
$twitter=$_POST['twitter'];
    if($email!=null && $password!=null && $fname!=null && $lname!=null && $username!=null && $phone!=null && $age!=null && $gender!=null && $address!=null && $locality!=null && $twitter!=null ){

$sql = "INSERT INTO `sign_up`(`email`, `pass`, `fname`, `lname`, `user_name`, `phone`, `age`, `gender`, `address`, `locality`, `twitter`) VALUES ('$email','$password','$fname','$lname','$username','$phone','$age','$gender','$address','$locality','$twitter')";
mysqli_query($db, $sql);?><meta http-equiv="refresh" content="0;url=http://localhost:8888/loaders/processing.html" /><?php
    }else{
?><script>alert("Please fill all entries");</script><?php
    }
}
?>


<html >
<head>
  <meta charset="UTF-8">
  <title>Location Logger-Sign Up</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  	 
	<section class="site-container padding-tb">
		
		<section class="card wow fadeInLeft">
			
			<h3 class="wow fadeInDown" data-wow-delay="0.4s">Sign Up</h3>
            <h5 class="wow fadeInDown" data-wow-delay="0.4s">We are glad to have you here.</h5>

			<form action="index.php" class="form" method="post">
			    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="email" class="form__input" id="email" name="email">
			        <label class="form__label" for="email">
						<span class="form__label-content">Email</span>
					</label>
			     </div>

			    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.6s">
			        <input type="password" class="form__input" id="password"  name="password" maxlength="15">
			        <label class="form__label" for="password">
						<span class="form__label-content">Password</span>
					</label>
			       
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.6s">
			        <input type="password" class="form__input" id="cpassword"  name="cpassword" maxlength="15">
			        <label class="form__label" for="password">
						<span class="form__label-content">Confirm Password</span>
					</label>
			       
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="text" class="form__input" id="fname" name="fname">
			        <label class="form__label" for="email">
						<span class="form__label-content">First Name</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="text" class="form__input" id="lname" name="lname">
			        <label class="form__label" for="email">
						<span class="form__label-content">Last Name</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="text" class="form__input" id="username" name="username">
			        <label class="form__label" for="email">
						<span class="form__label-content">User Name (start with '@')</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="number" class="form__input" id="phone" name="phone" maxlength="10">
			        <label class="form__label" for="email">
						<span class="form__label-content">Phone(+91)</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="number" class="form__input" id="age" name="age" maxlength="2">
			        <label class="form__label" for="email">
						<span class="form__label-content">Age</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="text" class="form__input" id="gender" name="gender" maxlength="1">
			        <label class="form__label" for="email">
						<span class="form__label-content">Gender(M/F)</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <textarea type="text" class="form__input" id="address" name="address" maxlength="150"></textarea>
			        <label class="form__label" for="email">
						<span class="form__label-content">Address</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="text" class="form__input" id="locality" name="locality">
			        <label class="form__label" for="email">
						<span class="form__label-content">Locality</span>
					</label>
			     </div>
                <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="text" class="form__input" id="twitter" name="twitter" >
			        <label class="form__label" for="email">
						<span class="form__label-content">**Twitter(@User_name)</span>
					</label>
			     </div>
                
                

			    <div class="form__wrapper--submit wow fadeInLeft" data-wow-delay="0.7s">
			    	<div class="form__input-submit">
			        	<button type="submit" name="submit" class="btn btn-block">Submit</button>
			        </div>
			    </div>
			</form>
			<div class="text-center text-small wow fadeInLeft" data-wow-delay="0.8s"><a href="../sign_in/index.html" >Already have an account..</a></div>
			 
			<!--<div class="modal">
				<a href="#" class="modal--close modal__toggle">&times;</a>
				
				<h3>Recover Password</h3>

				<p class="text-small">Your new password will be send to this email.</p>

				<form action="#" class="form2" method="post">
				    <div class="form__wrapper">
				        <input type="email" class="form__input" id="email" name="email">
				        <label class="form__label" for="email">
							<span class="form__label-content">Email</span>
						</label>
				    </div>

					<div class="form__wrapper--submit">
				    	<div class="form__input-submit">
				        	<button type="submit" name="submit" class="btn btn-block">Submit</button>
				        </div>
				    </div>

			    </form>

			</div><!-- /modal -->

		</section><!-- /card -->

		<footer class="footer padding-tb">
			<div class="footer__content">
				<p class="text-center text-small">Copyright <a href="https://codepen.io/mildrenben/pen/gbddEj">Location Logger</a>.</p>
			</div>
		</footer><!-- /footer -->
			</section><!-- /site-container -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.6/animate.min.css'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/wow/1.0.3/wow.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
