<?php
session_start();
if (isset($_SESSION['staff_name']))
{
require_once("config/config.php"); 

	$query=mysqli_query($connection,

	"select * from staff

	natural join state

	natural join role")
or die(mysqli_error($connection));

$arr = mysqli_fetch_array($query);

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$staff_name=$row['staff_name'];
        $email=$row['email']; 
           $phone=$row['phone']; 
           $state_name=$row['state_name']; 
           $role_name=$row['role_name']; 
           
	}

	}

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
<span>Name : <?php  echo $_SESSION['staff_name'];;?></span><br/>
<span>Email : <?php echo $email;?></span><br/>
<span>State: <?php echo $_SESSION['state_name'];?></span>	<br/>
</div>



<footer></footer>
</body>
</html>