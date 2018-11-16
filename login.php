<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="image/favicon.png"  sizes="16x16" >
		<link rel="icon" type="image/png" href="image/favicon.png"  sizes="32x32">
		<link rel="icon" type="image/x-con" href="image/favicon.ico"  sizes="32x32">
	<title>Main Project Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
<body>

	<style type="text/css">
		

		span.log 
		{
display: inline-block;
width: 100px;

		}
	</style>
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
	<a href="contactus.php" title="Contact Us"> Contact Us</a>

</li>
<li>
	<a href="login.php" title="Login" class="active"> Login</a>

</li>


</ul>

		</div>
		
<div id="social" >
			
<span><a href="facebook.com" target="_blank"><img src="images/facebook.png" /></a></span>
<span><a href="twitter.com" target="_blank"><img src="images/twitter.png" /></a></span>

		</div>


	</div>
<?php if (isset($_SESSION['message'])) 

{
	
?>
	<div><h3 style="padding: 30px 20px; color: blue; width: 300px; margin-left: 300px;"><?php 
if ($_SESSION['message']=='invalid') 
	echo "Username or Password Is Incorrect";

elseif ($_SESSION['message']=='logout') 
	echo "You Have Successfully Logged Out";

elseif ($_SESSION['message']=='authorize') 
	echo "You Are Not Authorized To View This Resource";

	?></h3></div>
<?php

unset($_SESSION['message']);
}
?>
<div id="form">
	
	<form method="POST" action="processes/login_process.php">
		<div><label>
			<span class="log">Username:</span><input style="padding: 10px 10px;" class="staffname" type="text" name="username" placeholder="Username" required focus autocomplete="off" />
		</label></div>

<div><label>
		<span class="log">Password:</span><input  style="padding: 10px 10px;"		type="password" name="password" placeholder="Password" class="Password" required/>

		</label>
</div>
<div>
	<input type="submit" name="CREATE STAFF" value="Login" class="loginbutton">
</div>
	</form>
</div>

<div id="footer"></div>
</body>

</html>

