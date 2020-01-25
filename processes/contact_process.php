<?php 
require_once('../config/config.php');


if (isset($_POST['full_name']) && trim($_POST['full_name'])!= "" )
{
$full_name=$_POST['full_name'];
$_SESSION['full_name']= $full_name;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['email']) && trim($_POST['email'])!= "" )
{
$admin=$_POST['email'];
$_SESSION['email']= $email;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['subject']) && trim($_POST['subject'])!= "" )
{
$subject=$_POST['subject'];
$_SESSION['subject']= $subject;
}
else{

	$_SESSION['error']= "";

}
if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../contacttest.php");
}

else {


mysqli_query($connection, 

		"insert into contact set full_name='$full_name', 
		subject='$subject', email='$email'"
	) or die(mysqli_error($connection));
	exit("Mail Successfully Sent");

}


 ?>