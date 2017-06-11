<!DOCTYPE HTML>
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
    
}else{
$query="Select id,first_name,last_name from Author";
$resultObj=$connection->query($query);
}
?>
<html>
	<head>
		<title></title>
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
							<!--	<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Phantom</span>
								</a>  -->

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
							<li><a href="#">Home</a></li>
							<li><a href="generic.html">Generic</a></li>
							<li><a href="elements.html">Elements</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Welcome to the <a href="#">Location Logger</a></h1>
								<p>Pick a Tennis stadium, Football stadium, bowling, Gym, etc with a click of a button and make your reservation on the go..<br />
                                Following is the list of enrolled locations, fell free to pick out your heart's choice 😋 </p>
							</header>
                            <?php
                            $i=2;
                            while(($i<=6)&&($resultObj->num_rows!=0)): ?>
							<section class="tiles">
                                <?php while($row=$resultObj->fetch_assoc()): ?>
								<article class="style<?=$i?>">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="generic.html">
										<h2><?=$row['first_name']?></h2>
										<div class="content">
											<p><?=$row['last_name']?></p>
                                        </div>
									</a>
								</article>
                                <?php $i++; ?>
                                <?php endwhile; ?>
                                <?php endwhile; ?>
							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<!--<section>
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
							</section>-->
							<section>
                                <header>
								<h1>Join our <a href="#">community</a></h1>
								<p>Help adding much more functionality into this project and get out name posted as a contributor.<br> Fork us on Github</p>
							     </header>
								<!--<h2>Join our community</h2>
                                <h5>Help adding much more functionality into this project and get out name posted as a contributor..</h5>-->
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
								<li>&copy; Location Logger. All rights reserved</li><li>Design: <a href="#">Syam Sundar K</a></li>
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