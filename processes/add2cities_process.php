<?php
session_start();

require_once("../config/config.php");


//begin validation

if (isset($_POST['city_name']) && isset($_POST['city_name'][0]) ) 
{
$city_name=$_POST['city_name'];
}

else{

	$_SESSION['error']= "";

}

if (isset($_POST['state_id']) && trim($_POST['state_id'])!= "" )
{
$state_id=$_POST['state_id'];
$_SESSION['state_id']= $state_id;

}
else{

	$_SESSION['error']= "";

}


if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page

header("location:../adding2citiesaronce.php");
}

else {
//save user details to database

for($a=0;$a<count($city_name);$a++)
{
	mysqli_query($connection, 

		"insert into cities set city_name='$city_name[$a]',  state_id='$state_id'")
		 or die(mysqli_error($connection));
	$_SESSION['message']='itemcreationsuccess';
	header("location:../adding2citiesaronce.php");

}

	

}


?>

