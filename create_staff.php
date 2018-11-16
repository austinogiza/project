<?php
session_start();
if (isset($_SESSION['staff_name']))
{
require_once("config/config.php"); 

//state query
$query=mysqli_query($connection,

 "select * from state")

or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

   {
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$state_id[]=$row['state_id'];
        $state_name[]=$row['state_name']; 
	  }

	}


require_once("config/config.php"); 

//role query

$query=mysqli_query($connection, "select * from role")

or die(mysqli_error($connection));

if(mysqli_num_rows($query) > 0 )

   {
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$role_id[]=$row ['role_id'];
        $role_name[] = $row ['role_name']; 
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
	<link rel="stylesheet" type="text/css" href="css/style.css" />
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
<div id="staff">
<?php
 require_once('includes/menu.php');
?>
</div>

</div>
<div style="float: left;">
	
	<style type="text/css">
		

		span.regis

		{
			display: inline-block;
			width: 150px;

		} 


	</style>	


	<div id="menu">
		<div id="nav">
	<?php 

	if (isset($_SESSION['error'])) {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color: red;"> ALL FEEDS ARE REQUIRED</button>
</div>
<?php
	}
?>

<?php 

	if (isset($_SESSION['message']) && $_SESSION['message']=='staffcreationsuccess') {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color:green;"> Success User Account Creation</button>
</div>
<?php

unset($_SESSION['error']);

unset($_SESSION['state_id']);
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['role_id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['admin']);

	}
?>




</ul>

		</div>
		


	</div>
	

<div id="form">
	
	<form method="POST" action="processes/create_staff_process.php">
		<div><label>
			<span class="regis">Staff Name:</span><input type="text" name="staff_name" placeholder="Staff Name" class="<?php
    if( !isset($_SESSION['name']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['name']))
			{
echo $_SESSION['name'];
			}

			?>" />

		</label>
</div>

<div><label>
			<span class="regis">Email:</span><input type="Email" name="email" placeholder="Email Address" class="<?php
    if( !isset($_SESSION['email']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>" />

		</label>
</div>
<div><label>
			<span class="regis">Phone:</span><input type="text" name="phone" placeholder="Phone Number" value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>"  class="<?php
    if( !isset($_SESSION['phone']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>"
			/>

		</label>
</div>
<div><label>
			<span class="regis">State:</span><select class="<?php
    if( !isset($_SESSION['state_id']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="state_id">

				<option <?php if (!isset($_SESSION['state_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">SELECT STATE</option>
				<?php
				for($a=0; $a<count($state_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['state_id'])) 

             {
             if ($_SESSION['state_id']==$state_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $state_id[$a] ?>">
             	
             <?php echo $state_name[$a]?>	
             </option>
				
				<?php
			}

				?>
						</select>
		</label>
</div>
<div><label>
		<span class="regis">Role Name:</span><select class="<?php
    if( !isset($_SESSION['role_id']) && isset($_SESSION['error']) )
echo 'error';

			?>" 
			name="role_id">

				<option <?php if (!isset($_SESSION['role_id']))

				 {
					echo "selected";
				}


				?>value="">SELECT ROLE</option>
				<?php
				for($a=0; $a<count($role_id); $a++)

				{
					?>

				<option <?php  if (isset($_SESSION['role_id'])) 
				{
				

				if ($_SESSION['role_id']==$role_id[$a]) 
				{

					{
					
					echo "selected";}
					
					}	
				}

				?>


				value="<?php echo($role_id[$a])?>">
<?php echo $role_name[$a]?></option>
				<?php
			}

				?>
						</select>
		</label>
</div>
<div><label>
		<span class="regis">Is Staff Admin?:</span>
		<select name="admin" class="<?php
    if( !isset($_SESSION['admin']) && isset($_SESSION['error']) )
echo 'error';

			?>">
				<option <?php if (!isset($_SESSION['admin']))

				 {
					echo "selected";
				}


				?>value="">SELECT ADMIN STATUS</option>
				<option
                <?php if (isset($_SESSION['admin']) && $_SESSION['admin']==0)

				 {
					echo "selected";
				 }
				?>
				  value="0"  >
					Regular Staff

				</option>
							<option
<?php if (isset($_SESSION['admin']) && $_SESSION['admin']==1)

				 {
					echo "selected";
				 }
				?>
							 value="1">
					Admin Staff
					
				</option>
			
						</select>

		</label>
</div>
<div><label>
			<span class="regis">Username:</span><input type="text" name="username" placeholder="Enter Username" class="<?php
    if( !isset($_SESSION['username']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['username']))
			{
echo $_SESSION['username'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['username']))
			{
echo $_SESSION['username'];
			}

			?>"/>

		</label>
</div>
<div><label>
		<span class="regis">Password:</span><input type="Password" name="password" placeholder="Password" class="<?php
    if( !isset($_SESSION['password']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['password']))
			{
echo $_SESSION['password'];
			}

			?>"

			 value="<?php 

			if(isset($_SESSION['password']))
			{
echo $_SESSION['password'];
			}

			?>"/>

		</label>
</div>
<div>
	<input type="submit" name="CREATE STAFF" value="CREATE STAFF" class="createstaff">
</div>
	</form>
</div>



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
unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['role_id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['admin']);

?>
