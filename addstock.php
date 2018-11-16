<?php
session_start();
if (isset($_SESSION['staff_name'])){

require_once("config/config.php"); 
$query=mysqli_query($connection, "select * from items")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$item_id[]=$row['item_id'];
        $item_name[]=$row['item_name']; 
	}

	}

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
	input, .regis, select {
		width: 300px;

		padding: 14px 12px;

	}	

	div.regis {

				width: 300px;

	}

#list{

	position: absolute;
	top: 150px;
	left: 660px;
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
<?php
 require_once('includes/menu.php');
?>
</div>
<div style="float: left;">

	<?php 

	if (isset($_SESSION['message']) && $_SESSION['message']=='itemcreationsuccess') {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color:green;"> Stock Successfully Created</button>
</div>
<?php

unset($_SESSION['error']);

unset($_SESSION['item']);

unset($_SESSION['quantity']);

unset($_SESSION['price']);
	}
?>
<div id="form">
	
</div>

<form method="POST" action="processes/add_stock_process.php" id="form1">
		<label>
			<div class="regis">Item Name:<select class="<?php
    if( !isset($_SESSION['item']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="item">

				<option <?php if (!isset($_SESSION['item'])) 

			{

				echo "selected";
			}
			
			?>

				value="">SELECT ITEM TO STOCK</option>
				<?php
				for($a=0; $a<count($item_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['item_id'])) 

             {
             if ($_SESSION['item_id']==$item_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $item_id[$a] ?>">
             	
             <?php echo $item_name[$a]?>	
             </option>
				
				<?php
			}

				?>
						</select>
		</label>
</div>
<label>
<div class="regis">Price:<input type="number" name="price" id="price" placeholder="Price" class="<?php
    if( !isset($_SESSION['price']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['price']))
			{
echo $_SESSION['price'];
			}

			?>" /></label>
</div>
<label>
<div class="regis"> Quantity:<input type="number" name="quantity" id="quantity" placeholder="Quantity" class="<?php
    if( !isset($_SESSION['quantity']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['quantity']))
			{
echo $_SESSION['quantity'];
			}

			?>" />
</div>

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
				url: "processes/add_stock_process.php",
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

unset($_SESSION['item']);

unset($_SESSION['quantity']);
unset($_SESSION['price']);
?>
