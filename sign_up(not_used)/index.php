<!DOCTYPE html>

<?php

if( $_GET["fname"] || $_GET["email"] ) {
      echo "Welcome ". $_GET['fname']. "<br />";
      echo "You're email id is ". $_GET['email'];
      
      exit();
   }

?>

<html>
<head>
  <meta charset="UTF-8">
  <title>Location Logger-SignUp</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <!-- multistep form -->
<form method="GET" action="<?php $_PHP_SELF ?>" id="msform" >
  <!-- progressbar -->
  <ul id="progressbar">
      <li class="active">Account Setup</li>
        <li>Personal Details</li>
      <li>Social Profiles</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">Create your account</h2>
    <h3 class="fs-subtitle">This is step 1</h3>
    <input type="text" name="email" placeholder="Email" />
    <input type="password" name="pass" placeholder="Password" />
    <input type="password" name="cpass" placeholder="Confirm Password" />
    <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <h3 class="fs-subtitle">We will never sell it</h3>
    <input type="text" name="fname" placeholder="First Name" />
    <input type="text" name="lname" placeholder="Last Name" />
    <input type="text" name="user_name" placeholder="User Name (start with '@')" />
    <input type="text" name="phone" placeholder="Phone(+91)" />
    <input type="text" name="age" placeholder="Age" />
    <input type="text" name="gender" placeholder="Gender" />
    <textarea name="address" placeholder="Address"></textarea>
    <input type="text" name="locality" placeholder="Locality" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
    </fieldset>
    <fieldset>
    <h2 class="fs-title">Social Profiles</h2>
    <h3 class="fs-subtitle">Your presence on the social network</h3>
    <input type="text" name="twitter" placeholder="Twitter(@User_name)" />
    <input type="text" name="facebook" placeholder="Facebook" />
    <input type="text" name="gplus" placeholder="Google Plus" />
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="submit" name="submit" class="submit action-button" value="Submit" />
    </fieldset>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
