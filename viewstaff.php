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

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$staff_name[]=$row['staff_name'];
        $email[]=$row['email']; 
           $phone[]=$row['phone']; 
           $state_name[]=$row['state_name']; 
           $role_name[]=$row['role_name']; 
           
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

	<style>



		table, tr, td {
			
		padding: 10px 10px;
border: none;
border-collapse: collapse;
	border-spacing: 5px;
	 height: 50px;
	

		}




	</style>
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
<div id="staff">
<?php
 require_once('includes/menu.php');
?>
</div>


</div>
<div style="float: left;">

<table>

	<caption>Staff Details</caption>
	<thead><tr><td>S/N</td><td>Staff Name</td><td>Email</td><td>Phone</td><td>State</td><td>Role</td></tr></thead>
	<tbody>
		<?php

		for ($a=0; $a < count($staff_name); $a++) { 

?>		<tr>
			<td><?php echo $a+1; ?></td>
			

			<td> 
<?php 
		echo $staff_name[$a];

		?>
			</td>
			<td>
<?php 
		echo $email[$a];

		?>

			</td>
			<td>
				<?php 
		echo $phone[$a];

		?>

			</td>

			<td> 
				<?php 
		echo $state_name[$a];

		?>

			</td>

			<td>
				
			<?php 
		echo $role_name[$a];

		?>
			</td>




		</tr>
		<?php
}
		?>
	</tbody>

</table>
</div>
<div id="">
	

</div>
<div id="">
	

</div>


</div>


<footer></footer>
</body>
</html>

<?php

unset($_SESSION['error']);

unset($_SESSION['state_id']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['role_id']);
unset($_SESSION['admin']);

?>