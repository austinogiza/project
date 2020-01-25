<?php
session_start();
if (isset($_SESSION['staff_name'])){

}

else{
	$_SESSION['message']='authorize';
	header("location:login.php");
	}
?>
<!doctype html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<meta charset="utf-8">
<link rel="stylesheet" href="css/search.css">
<title>My Home</title>
</head>

<body>
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
			<div class="form">
	<div class="input">
	<span class="group">
		
		<button>Search</button><input type="text" name="search" class="search" placeholder="Search By Customer Name">
	</span>	


	</div>


</div>
<br />
<div id="result">
	

</div>

</div>



<footer></footer>
</body>
</html>
<script>
	
	$(document).ready(()=>{
		$(".search").keyup(()=>{
			var txt =$(this).val();

			if (txt!='') {


			}
			else{

				$('#result').html('');
				$.ajax({
					url: "processes/fetch_search.php",
				type: "POST",
				data: {search: txt},
				dataType: "text",
				success: function(data)
				{
					$('#result').html(data);
				}

				});
			}
		});
	});
</script>