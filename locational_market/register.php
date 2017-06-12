<!DOCTYPE HTML>
<?php
session_start();
if (isset($_POST['submit'])) {
$db = mysqli_connect("localhost:8889", "root", "root", "final_db");
$name=$_POST['name'];
$email=$_POST['email'];
$persons=$_POST['persons'];
$location=$_POST['location'];
$date=$_POST['date'];
$time=$_POST['time'];

    $_SESSION['a']=$name;
    $_SESSION['b']=$email;
    $_SESSION['c']=$persons;
    $_SESSION['d']=$location;
    $_SESSION['e']=$date;
    $_SESSION['f']=$time;
    echo $_SESSION['a'];
//echo $name.$email.$persons.$location.$date.$time;
    
$query="INSERT INTO `register`(`Name`, `email`, `time`, `persons`, `loc_name`, `date`) VALUES ('$name','$email','$time','$persons','$location','$date')";
mysqli_query($db, $query);
 
    //echo "<script>location.href='http://localhost:8888/locational_market/successfull.php'</script>";
}

?>
<html>
	<head>
		<title>Description page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Aeroslim Fitness Centre</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="http://localhost:8888/elate/index.php">Logout</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<span class="image main"><img src="images/gym.jpg" alt="" /></span>
							<p>Make you registration by filling out the given form</p>
							<p>No 106, Behind Olympia Tech Park, 3RD Street Sundar Nagar, Ekkaduthangal, Chennai – 600032<br>Phone: +(91)-44-66427585

</p>                           
                            <section>
									<h2>Form</h2>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" id="demo-email" value="" placeholder="Email" />
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="persons" id="demo-category">
														<option value="">No of Persons</option>
														<option value="1">Myself alone</option>
														<option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
														<option value="6">6</option>
													</select>
												</div>
											</div>
                                            <div class="6u 12u$(xsmall)">
												<input type="text" name="location" id="demo-name" value="Aeroslim Fitness Centre" placeholder="Location Name" />
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="date" id="demo-category">
														<option value="">Date</option>
														<option value="12/06/2017">Today</option>
														<option value="13/06/2017">Tomorrow</option>
														<option value="14/06/2017">The day after</option>
													</select>
												</div>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="time" id="demo-category">
														<option value="">Time</option>
														<option value="9-10AM">9-10AM</option>
														<option value="10-11AM">10-11AM</option>
														<option value="11-12AM">11-12AM</option>
														<option value="4-5PM">4-5PM</option>
													</select>
												</div>
											</div>
											<div class="4u 12u$(small)">
                                                Wages:
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal</label>
											</div>
											<div class="4u$ 12u$(small)">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High</label>
											</div>
											<div class="6u 12u$(small)">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy</label>
											</div>
											<div class="6u$ 12u$(small)">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">Not a robot</label>
											</div>
											<!--<div class="12u$">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>-->
											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Confirm" class="special" name="submit"/></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
                
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="#">
									<div class="field half first">
										<input type="text" name="name" id="name" placeholder="Name" />
									</div>
									<div class="field half">
										<input type="email" name="email" id="email" placeholder="Email" />
									</div>
									<div class="field">
										<textarea name="message" id="message" placeholder="Message"></textarea>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="special" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>Follow</h2>
								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
									<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
									<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
									<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>