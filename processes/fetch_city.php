<?php
session_start();

require_once("../config/config.php");
//confirm if state  is linked to city
$state_id=$_POST['state_id'];
if ($state_id!='') {
$query=mysqli_query($connection, "SELECT * from cities WHERE city_name= '".$_POST["state_id"]."' ORDER BY state_id ASC");
?>