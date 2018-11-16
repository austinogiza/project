<?php
session_start();

require_once("../config/config.php");

//begin validation

if (isset($_POST['item_name']) && trim($_POST['item_name'])!= "" )
{
$item_name=$_POST['item_name'];
$_SESSION['item_name']= $item_name;


//save user details to database
	

	mysqli_query($connection, 

		"insert into sales set item_name='$item_name' ")
		 or die(mysqli_error($connection));
	$_SESSION['message']='itemcreationsuccess';
	header("location:../item.php");

}

else{

	$_SESSION['error']= "";

}


?>
