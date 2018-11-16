<?php
session_start();

require_once("../config/config.php");

//begin validation

if (isset($_POST['city_name']) && trim($_POST['city_name'])!= "" )
{
$city_name=$_POST['city_name'];
$_SESSION['city_name']= $city_name;

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

header("location:../addcities.php");
}

else {
//save user details to database


	mysqli_query($connection, 

		"insert into cities set city_name='$city_name',  state_id='$state_id'")
		 or die(mysqli_error($connection));
	$_SESSION['message']='itemcreationsuccess';
	header("location:../addcities.php");

}


?>

