<?php
session_start();
require_once("config/config.php"); 

//state query

$query=mysqli_query($connection, "select * from state")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$state_id[]=$row['state_id'];
        $state_name[]=$row['state_name']; 
	}

	}
// cities query
require_once("config/config.php"); 


$query=mysqli_query($connection, "select * from cities")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$cities_id[]=$row['cities_id'];
        $city_name[]=$row['city_name']; 
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
		

		span.regis

		{
			display: inline-block;
			width: 150px;

		} 


	</style>	


	<div id="header">
		<a href="index.php"><img src="images/logo.png">
</a>
	</div>

	<div id="menu">
		<div id="nav">
	<?php 

	if (isset($_SESSION['error'])) {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color: red;"> ALL FEEDS ARE REQUIRED</button>
</div>
<?php
unset($_SESSION['message']);
	}
?>
</ul>

		</div>
		
<div id="social" >
			
<span><a href="facebook.com" target="_blank"><img src="images/facebook.png" /></a></span>
<span><a href="twitter.com" target="_blank"><img src="images/twitter.png" /></a></span>

		</div>


	</div>
	

<div id="form">
	
	<form method="POST" action="processes/testing_process.php">
		<div><label>
			<span class="regis">Staff Name:</span><input type="text" name="staff_name" placeholder="Staff Name" class="<?php
    if( !isset($_SESSION['staff_name']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['staff_name']))
			{
echo $_SESSION['staff_name'];
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
    if( !isset($_SESSION['staff_name']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['staff_name']))
			{
echo $_SESSION['staff_name'];
			}

			?>"
			/>

		</label>
</div>
<div><label>
			<span class="regis">State:</span><select class="<?php
    if( !isset($_SESSION['state_id']) && isset($_SESSION['error']) )
echo 'error';
?>" id="state_id"
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
			<span class="regis">City:</span><select class="<?php
    if( !isset($_SESSION['cities_id']) && isset($_SESSION['error']) )
echo 'error';
?>" id="cities_id"
			name="cities_id">

				<option <?php if (!isset($_SESSION['cities_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">SELECT CITY</option>
				<?php
				for($a=0; $a<count($cities_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['cities_id'])) 

             {
             if ($_SESSION['cities_id']==$state_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $cities_id[$a] ?>">
             	
             <?php echo $city_name[$a]?>	
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
    if( !isset($_SESSION['staff_name']) && isset($_SESSION['error']) )
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
<script>
	$(document).ready(()=> {

		$('#state_id').change(()=>{

			var state_id = $(this).val();

			$.ajax ({
				url: "processes/fetch_city.php",
				type: "POST",
				data: 'state_id',
				success: function(data)
				{
					#('#cities_id').html(date);
				}


			});
		});
	});


</script>

<div id="footer"></div>
</body>

</html>

<?php

unset($_SESSION['error']);
unset($_SESSION['state_id']);
unset($_SESSION['staff_name']);
unset($_SESSION['cities_id']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['role_id']);
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['admin']);

?>