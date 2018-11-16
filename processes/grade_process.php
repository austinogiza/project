<?php
session_start();
$score=$_POST['score'];

$grade="";

if ($score>=70) 
	$grade="A";

elseif ($score>=60) 
$grade="B";

elseif ($score>=50) 

$grade="C";
elseif ($score>=45) 


$grade="D";

elseif ($score<=39) 

$grade="F";

	$_SESSION['grade']=$grade;
	header("location:../grade.php");
exit();
?>