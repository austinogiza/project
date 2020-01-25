
<?php
session_start();
require_once("config/config.php"); 

//state query


	
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="image/favicon.png"  sizes="16x16" >
		<link rel="icon" type="image/png" href="image/favicon.png"  sizes="32x32">
		<link rel="icon" type="image/x-con" href="image/favicon.ico"  sizes="32x32">
	<title>Main Project Home</title>
	<link rel="stylesheet" href="css/contacttest.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	</head>
<body>
	<div id="header">
		<a href="index.php"><img src="images/logo.png">
</a>
	</div>

	<div id="menu">
		<div id="nav">
		
<ul><li>
	<a href="index.php">Home </a>

</li>
<li><a href="aboutus.php" title="About TechUp" >About Us </a>
	

</li>

<li>
	<a href="contactus.php" title="Contact Us" class="active"> Contact Us</a>

</li>
<li>
	<a href="login.php" title="Login"> Login</a>

</li>


</ul>

		</div>
		
<div id="social" >
			
<span><a href="facebook.com" target="_blank"><img src="images/facebook.png" /></a></span>
<span><a href="twitter.com" target="_blank"><img src="images/twitter.png" /></a></span>

		</div>


	</div>
<div id="contactus">
	<div id="contactinfo">

	
	
<span>
	<i class="fas fa-phone-square"></i>
</span>
	<span>
		<i class="fas fa-envelope"></i>
	</span>

	<span>
		
				<i class="fas fa-map-marker"></i>
	</span></div>
	<?php 

	if (isset($_SESSION['error'])) {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color: red;"> ALL FEEDS ARE REQUIRED</button>
</div>
<?php
unset($_SESSION['full_name']);
unset($_SESSION['email']);
unset($_SESSION['message']);
	}
?>	
	<div id="form">
	<form method="post">
	<div><input type="text" name="full_name" placeholder="Full Name" class="<?php
    if( !isset($_SESSION['fullname']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['fullname']))
			{
echo $_SESSION['fullname'];
			}

			?>">
		

	</div>
	<div><label><b>Subject :</b><br/>
<textarea name="How May We Help You" placeholder="How May We Help You" name="subject" style="height: 300px; resize: none;" class="<?php
    if( !isset($_SESSION['subject']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['subject']))
			{
echo $_SESSION['subject'];
			}

			?>" ></textarea></label>

	</div>
	<div class="textarea"><label><input type="email" name="email" placeholder="*Email" class="<?php
    if( !isset($_SESSION['email']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>" ></label></div>
<div> <input type="submit" name="submit" class="contactus"></div>
</div>
</form>
</div>
<div id="footer"></div>
</body>

</html>

<?php

unset($_SESSION['error']);
unset($_SESSION['submit']);
unset($_SESSION['full_name']);
unset($_SESSION['email']);
unset($_SESSION['subject']);

?>