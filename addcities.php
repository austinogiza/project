<?php
session_start();
if (isset($_SESSION['staff_name'])){

require_once("config/config.php");

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

<script src="js/jquery-3.3.1.min.js"></script>

</head>

<body>

	<style>
	input, .regis, select {
		width: 300px;

		padding: 14px 12px;

	}	

	div.regis {

				width: 300px;

	}

#list{

	position: absolute;
	top: 150px;
	left: 660px;
    display: none;
    margin-top: 15px;
    margin-left: -3px;
}


#form{

	position: relative;
}

#list p {
	border-bottom: 3px solid grey;
	color: limegreen;

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
<?php
 require_once('includes/menu.php');
?>
</div>
<div style="float: left;">

	<?php 

	if (isset($_SESSION['message']) && $_SESSION['message']=='itemcreationsuccess') {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color:green;"> City Successfully Added</button>
</div>
<?php


unset($_SESSION['state_name']);
unset($_SESSION['message']);
unset($_SESSION['state_id']);

unset($_SESSION['city_name']);
	}
?>
<div id="form">
	
</div>

<form method="POST" action="processes/add_city_process.php" id="form1">
		<label>
			<div class="regis">State:<select id="state_id" class="<?php
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
<label>
<div class="regis">City Name:<input type="text" name="city_name" id="city_name" placeholder="City Name" class="<?php
    if( !isset($_SESSION['city_name']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['city_name']))
			{
echo $_SESSION['city_name'];
			}

			?>" /></label>

</div>

		<input type="submit" value="Submit" id="submit"> </form>
			<br /><?php 

	if (isset($_SESSION['error'])) {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color: red; margin-top: 10px;"> ALL FEEDS ARE REQUIRED</button>
</div>
<?php
	}
?>
	
			<div id="content">
			

			</div>



		</div>
</div>
<div id="">
	

</div>
<div id="">
	

</div>


</div>


<footer></footer>
<script>
	
</script>

</body>
</html>

<?php

unset($_SESSION['error']);

unset($_SESSION['state_id']);
unset($_SESSION['message']);
unset($_SESSION['city_name']);

?>
