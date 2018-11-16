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

<head><link rel="stylesheet" type="text/css" href="css/dashboard.css">
<meta charset="utf-8">
<title>My Home</title>

<script src="js/jquery-3.3.1.min.js"></script>

</head>

<body>

	<style>
	input, .regis {

		padding: 14px 12px;

	}	

#list{

	position: absolute;
	top: 150px;
	left: 860px;
    display: none;
    margin-top: 15px;
    margin-left: -3px;
}


#form{

	position: relative;
}

#list p {
	border-bottom: 3px solid grey;
	color: limegreen;

}

	</style>


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
<div id="staff">
<?php
 require_once('includes/menu.php');
?>
</div>
</div>
<div style="float: left;">

	<?php 

	if (isset($_SESSION['message']) && $_SESSION['message']=='itemcreationsuccess') {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color:green;"> Item Successfully Added </button>
</div>
<?php

unset($_SESSION['error']);

unset($_SESSION['item_name']);

	}
?>
<div id="form">
</div>

<form method="POST" action="processes/item_process.php" id="form1">
		<div><label>
			<span class="regis">Item Name:</span><input type="text" name="item_name" id="iname" placeholder="Item Name" class="<?php
    if( !isset($_SESSION['item_name']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['item_name']))
			{
echo $_SESSION['item_name'];
			}

			?>" />

		</label>

		<input type="submit" value="Submit" id="submit"> </form>

		<div id="list"> 
			<span >
			You have the following similar item(s) in your database: 
			</span>
			<div id="content">
			

			</div>



		</div>
</div>
<div id="">
	

</div>
<div id="">
	

</div>


</div>


<footer></footer>
<script>
	
	$(document).ready(()=>{
		$('#submit').click(()=>{

$('#form1').submit();
		});
		$("#iname").keyup(()=>{

			var itm=$("#iname").val();
			$.ajax({

				type: "POST", 
				data: {
					item: itm
				},
				url: "processes/item_check_process.php",
				error: ()=>{ alert("there was a problem");
				},
				success: (result)=>{
					if (result!= '') {

						$('#list').slideDown(500);
						$("#content").html(result);

					}

					else {
    $('#list').slideUp(500);

					}


				}
			});

		}); 

			});
</script>

</body>
</html>

<?php

unset($_SESSION['error']);

unset($_SESSION['item_name']);

?>
