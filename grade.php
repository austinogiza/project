<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>


	<style type="text/css">
		
		button {

			padding: 20px 20px;
			margin: 0 auto;
			width: 190px;
			background-color: #666;
		}

		input { padding: 15px 10px;
			margin-bottom: 10px;
			margin-left: 10px;

		}
	</style>
<div id="form">
	<form action="processes/grade_process.php" method="post">
	<div><label>Enter Student Score:<input type="number" name="score" placeholder="Enter Student Score"></label>
</div>
<div><button type="Submit" value="Get Grade" name="getgrade">Get Grade</button></div>

</form>


</div>
<?php if (isset($_SESSION['grade'])) 
{


?>
<p>You scored <?php echo $_SESSION['grade']; ?>
</p>
<?php

}

?>
</body>


</html>

<?php

if(isset($_SESSION['grade']))
	unset($_SESSION['grade']);
?>