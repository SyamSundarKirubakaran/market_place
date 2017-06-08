<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Material Design Form Inputs</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  	 
	<section class="site-container padding-tb">
		
		<section class="card wow fadeInLeft">
			
			<h3 class="wow fadeInDown" data-wow-delay="0.4s">Login Form</h3>

			<form action="#" class="form" method="post">
			    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.5s">
			        <input type="email" class="form__input" id="email" name="email">
			        <label class="form__label" for="email">
						<span class="form__label-content">Email</span>
					</label>
			     </div>

			    <div class="form__wrapper wow fadeInDown" data-wow-delay="0.6s">
			        <input type="password" class="form__input" id="password"  name="password">
			        <label class="form__label" for="password">
						<span class="form__label-content">Password</span>
					</label>
			       
			     </div>

			    <div class="form__wrapper--submit wow fadeInLeft" data-wow-delay="0.7s">
			    	<div class="form__input-submit">
			        	<button type="submit" name="submit" class="btn btn-block">Submit</button>
			        </div>
			    </div>
			</form>
			<div class="text-center text-small wow fadeInLeft" data-wow-delay="0.8s"><a href="#" class="modal__toggle">Forgot Password ?</a></div>
			 
			<div class="modal">
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
				<p class="text-center text-small">Inspired from Ben Mildren pen at <a href="https://codepen.io/mildrenben/pen/gbddEj">codepen</a>.</p>
				<p class="text-center text-small">Created by <a href="https://mithicher.github.io">mithicher</a> | Tweet me <a href="https://twitter.com/mithicher">@mithicher</a>. 
				Plugins used <a href="https://daneden.github.io/animate.css/">Animate.css</a>, <a href="http://mynameismatthieu.com/WOW/">WOW.js</a>
				and <a href="https://jqueryvalidation.org/">jQuery Validation Plugin</a>
				</p>
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
