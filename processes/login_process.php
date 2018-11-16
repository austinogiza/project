<?php
session_start();
require_once("../config/config.php");
//database connection
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($connection,
"select staff_name, role_id, admin from staff where username='$username' and password='$password'")
or die(mysqli_error($connection));
if (mysqli_num_rows($query)>0) 
{
while ($row=mysqli_fetch_assoc($query)) 
{
$staff_name=$row['staff_name'];
$role_id=$row['role_id'];
$admin=$row['admin'];
}
$_SESSION['staff_name']=$staff_name;
$_SESSION['staff_role_id']=$role_id;
$_SESSION['is_staff_admin']=$admin;
header("location:../dashboard.php");
}

else {
	$_SESSION['message']="invalid";
	header("location:../login.php");

}
?>