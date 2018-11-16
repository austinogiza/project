<?php
session_start();

require_once("../config/config.php");

//begin validation

if (isset($_POST['item']) && trim($_POST['item'])!= "" )
{
$item=$_POST['item'];
$_SESSION['item']= $item;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['quantity']) && trim($_POST['quantity'])!= "" )
{
$quantity=$_POST['quantity'];
$_SESSION['quantity']= $quantity;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['price']) && trim($_POST['price'])!= "" )
{
$price=$_POST['price'];
$_SESSION['price']= $price;
}

else{

	$_SESSION['error']= "";

}

if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page

header("location:../addstock.php");
}

else {
//save user details to database
$date= date('Y-m-d H:i:s');
	

	mysqli_query($connection, 

		"insert into stock set item_id='$item', price='$price', quantity='$quantity', date='$date' ")
		 or die(mysqli_error($connection));
	$_SESSION['message']='itemcreationsuccess';
	header("location:../addstock.php");

}


?>


<script>
	

	var errorEmpty = "<?php echo $errorEmpty;?>";
	if (errorEmpty == true) {

		$("#item, #price, #quantity").addClass("input-error");
	}
		if (errorEmpty == false) {
				$("#item, #price, #quantity").val("");


	}
</script>