<?php
session_start();

require_once("../config/config.php");

//begin validation

if (isset($_POST['staff_name']) && trim($_POST['staff_name'])!= "" )
{
$staff_name=$_POST['staff_name'];
$_SESSION['staff_name']= $staff_name;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['admin']) && trim($_POST['admin'])!= "" )
{
$admin=$_POST['admin'];
$_SESSION['admin']= $admin;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['email']) && trim($_POST['email'])!= "" )
{
$email=$_POST['email'];
$_SESSION['email']= $email;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['phone']) && trim($_POST['phone'])!= "" )
{
$phone=$_POST['phone'];
$_SESSION['phone']= $phone;
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
if (isset($_POST['role_id']) && trim($_POST['role_id'])!= "" )
{
$role_id=$_POST['role_id'];
$_SESSION['role_id']= $role_id;

}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['username']) && trim($_POST['username'])!= "" )
{
$username=$_POST['username'];
$_SESSION['username']= $username;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['password']) && trim($_POST['password'])!= "" )
{
$password=$_POST['password'];
$_SESSION['password)']= $password;
}
else{

	$_SESSION['error']= "";

}
if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../registration.php");
}

else {
//save user details to database
	

	mysqli_query($connection, 

		"insert into staff set staff_name='$staff_name', 
		phone= '$phone', email='$email', password='$password', username= '$username',  role_id='$role_id', state_id='$state_id', admin='$admin'"
	) or die(mysqli_error($connection));
	exit("User Account Creation Successful");

}



?>
