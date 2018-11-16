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
 input[type=submit]
 {
 	

		padding: 14px 12px;
margin-left: 10px;
 }
#list{
 width:300px;
	position: absolute;
	top: 5px;
	left: 350px;
   display: none;
    margin-top: 45px;
    margin-left: -3px;
    margin-bottom: 10px;
}


#form{

	position: relative;
}

#list p {
	border-bottom: 3px solid grey;
	color: dodgerblue;
	margin-bottom: 10px;

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
	<?php 

	if (isset($_SESSION['error'])) {
?>

<div style="display: inline-block;"><button style="padding: 9px 9px; color: red;"> ALL FEEDS ARE REQUIRED</button>
</div>
<?php
	}
?>
</div>

<form method="POST" action="processes/sale_process.php" id="form1">
		<label>
<div class="regis" style="position: relative;">Item Name:<input autocomplete="off" type="text" name="item" id="item_name" placeholder="Item Name" class="<?php
    if( !isset($_SESSION['item']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['item']))
			{
echo $_SESSION['item'];
			}

			?>" /></label>


			<div id="list"> 
			<span >
			Dynamic Store Query Results:  
			</span>
			<div id="content" style="margin-bottom: 10px; margin-top: 10px;">
			

			</div>



		  </div>
</div>
<label>
<div class="regis">Price:<input type="number" id="price" name="price" placeholder="Price" class="<?php
    if( !isset($_SESSION['price']) && isset($_SESSION['error']) )
echo 'error';

			?>" readonly value="<?php 

			if(isset($_SESSION['price']))
			{
echo $_SESSION['price'];
			}

			?>" /></label>
</div>
<label>
<div class="regis"> Quantity:<input type="number" min="1" id="quantity" name="quantity" class="<?php
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
		<label>
<div class="regis">Amount:<input type="number" id="amount" name="amount" placeholder="Amount" class="<?php
    if( !isset($_SESSION['amount']) && isset($_SESSION['error']) )
echo 'error';

			?>" readonly value="<?php 

			if(isset($_SESSION['price']))
			{
echo $_SESSION['price'];
			}

			?>" /></label>
</div>
<label>

<label>
<div class="regis">Description:<input type="text" name="description" id="iname" placeholder="Enter Description" class="<?php
    if( !isset($_SESSION['description']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['description']))
			{
echo $_SESSION['description'];
			}

			?>" /></label>
</div>
<label>

		<input type="submit" value="RECORD SALE" id="submit"/> </form>

		    
</div>
<div id="">
	

</div>
<div id="">
	

</div>


</div>


<footer></footer>
<script>
	
	$(document).ready(()=>{

		$("body").on('click','p.auto',(e)=>{
         
             var price= $(e.target).data('price');
             var remaining_qty=$(e.target).data('remaining');
        	$('#list').slideUp(500);
             $('input#price').val(price);
              $('input#quantity').prop('max',remaining_qty);
});

		$('input#quantity').change(()=>{
	price = $('input[name="price"]').val();
    quantity = $('input[name="quantity"]').val();
    
        result = quantity * price;
        $('input#amount').val(result);
  
		});

		

   

		$('#item_name').keyup(()=>{

			var name = $('#item_name').val();
			$.ajax({

				type: "POST", 
				data: {
					item: name
				},
				url: "processes/salescheck_process.php",
				error: ()=>{ alert("there was a problem");},
				success: (result)=>{
					if (result!= '') {
						//console.log(result);

						switch(result)
						{
							case "no_item":
							 $("#content").html("No such item exists");
							 break;
							 case "no_stock":
							  $("#content").html("Item exists but has not been stocked!");
							  break;
							  default:
							$('#list').slideDown(500);
					         $("#content").html(result); 
					         break; 

						}

						
					}
					else { $('#list').slideUp(500); }
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
unset($_SESSION['amount']);
unset($_SESSION['description']);
?>
