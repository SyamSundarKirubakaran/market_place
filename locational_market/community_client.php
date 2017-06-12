<!DOCTYPE HTML>
<?php

if (isset($_POST['submit'])) {
$db = mysqli_connect("localhost:8889", "root", "root", "test_database");
$loc_name=$_POST['location'];
$pay=$_POST['pay'];

    
$query="INSERT INTO `Author`(`first_name`, `last_name`) VALUES ('$loc_name','$pay')";
mysqli_query($db, $query);
 
    echo "<script>location.href='http://localhost:8888/loaders/soon.php'</script>";
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
								<a href="#" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Join our community</span>
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
							<li><a href="http://localhost:8888/locational_market/index.php">Home</a></li>
                            <li><a href="http://localhost:8888/profile_view/personal_view.php">Profile</a></li>
                            <li><a href="http://localhost:8888/date_picker/index.html">Calender</a></li>
                            <li><a href="http://localhost:8888/locational_market/community_client.php">Community Client</a></li>
							<li><a href="http://localhost:8888/elate/index.php">Logout</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
                            <div class="12u$"><span class="image fit"><img src="images/community.jpg" alt="" /></span></div>
							<p><!--<span class="image left"><img src="images/runner.jpg" alt="" /></span>-->Expand your business online.. Give us the right info of yours and we'll make sure that your place will have more number of visitors than you ever had before. We'll recommand your place to a wide range of customers in your locality and you can draw attention of the most from the customers, b ysitting right from your place.. </p>
                            <p>Making more customers online through us shall let your location in the top trending list of places and we'll garentee you with assured rewards when it happen..</p>
                            <p>Good luck!! And we're so excited to have you here.</p>
                            <section>
									<h2>Tell us about your place</h2>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u$(xsmall)">
												<input type="text" name="name" id="demo-name" value="" placeholder="Name of the location" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="email" name="email" id="demo-email" value="" placeholder="Email" />
											</div>
                                            <div class="6u 12u$(xsmall)">
												<input type="text" name="oname" id="demo-name" value="" placeholder="Name of the Owner" />
											</div>
											<div class="6u$ 12u$(xsmall)">
												<input type="text" name="phone" id="demo-email" value="" placeholder="Tele Phone Number" />
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="pay" id="demo-category">
														<option value="">Basic Pay</option>
														<option value="Rs.300">Rs.300/hour</option>
														<option value="Rs.500">Rs.500/hour</option>
                                                        <option value="Rs.700">Rs.700/hour</option>
                                                        <option value="Rs.1000">Rs.1000/hour</option>
                                                        <option value="Rs.1500">Rs.1500/hour</option>
														<option value="Rs.2000">Rs.2000/hour</option>
													</select>
												</div>
											</div>
                                            <div class="6u 12u$(xsmall)">
												<input type="text" name="location" id="demo-name" value="" placeholder="Location Name" />
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="availability" id="demo-category">
														<option value="">Availability</option>
														<option value="0">Not available of saturdays and Sundays</option>
														<option value="1">Available on all days</option>
													</select>
												</div>
											</div>
											<div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="time" id="demo-category">
														<option value="">Time of work</option>
														<option value="9-12NOON">9-12NOON</option>
                                                        <option value="4-9PM">4-9PM</option>
													</select>
												</div>
											</div>
                                            <div class="6u 12u$(xsmall)">
												<input type="text" name="locality" id="demo-name" value="" placeholder="Locality" />
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="capacity" id="demo-category">
														<option value="">Mamimum capacity</option>
														<option value="30">30 people/Small</option>
														<option value="50">50 people/Medium</option>
                                                        <option value="70">70 people/Large</option>
                                                        <option value="100">100 people/Extra large</option>
													</select>
												</div>
											</div>
                                            <div class="6u$ 12u$(xsmall)">
												<div class="select-wrapper">
													<select name="pin" id="demo-category">
														<option value="">Pin code</option>
														<option value="625 006">625 006</option>
                                                        <option value="625 000">625 000</option>
													</select>
												</div>
											</div>
											<div class="4u 12u$(xsmall)">
                                                Wages:
												<input type="radio" id="demo-priority-low" name="demo-priority">
												<label for="demo-priority-low">Low</label>
											</div>
											<div class="4u 12u$(small)">
												<input type="radio" id="demo-priority-normal" name="demo-priority" checked>
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
												<input type="checkbox" id="demo-human" name="demo-human">
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
							<!--<ul class="copyright">
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>-->
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