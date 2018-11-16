<?php
session_start();
if (isset($_SESSION['staff_name'])){

}

else{
	$_SESSION['message']='authorize';
	header("location:login.php");
	}
?>
<!doctype html>
<html>

<head><link rel="stylesheet" type="text/css" href="css/dashboard.css">
<meta charset="utf-8">
<title>My Home</title>
</head>

<body>
<div id="header"> 

	<div class="logo">
<a href="index.php"><img src="images/logo.png">


</a>
</div>

<div class="title">
	<button type="Submit" value="Management Portal"  class="manage">
		
		Management Portal
	</button>

</div>

<div class="welcome" >
	<button type="Submit" value="Welcome Name" class="welcomebtn" >
		
		Welcome <?php 
		echo $_SESSION['staff_name'];

		?>!!
	</button>

</div>

</div>

<div id="staff">
<?php
 require_once('includes/menu.php');
?>
</div>

<div style="float: left;">
	<p>You are in the admin panel. Please use the admin panel on your left to maximize your experience</p>

	<button onclick="runeffect()" style="padding: 15px 25px;">I am me</button>	

	<p id="effect">I am the effect</p>	



</div>



<footer></footer>
</body>
</html>

<script type="text/javascript">
	
/*// old method 
function runeffect(arg1) {
	// body...
	alert("There was a click " + arg1);
}
*/

//  new method

/* let runeffect =(arg1)=>


alert("There was a click "+ arg1)
*/

//old selection method

runeffect=()=>
{

let el=document.getElementById("effect");
el.style.padding="50px 70px";
el.style.color="red";
}
</script>
