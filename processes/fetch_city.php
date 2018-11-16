<?php
session_start();

require_once("../config/config.php");
//comfirm if ite  already exists in item table

$cities_id=$_POST['cities_id'];
if ($cities_id!='') {
	$query=mysqli_query($connection, "SELECT cities_id from cities WHERE state_id='' ") or die('There Was An Error');
	if (mysqli_num_rows($query)>0 )
	{
		 while ($rows= mysqli_fetch_assoc($query)) 
		 {
		   $cities_id= $rows['cities_id'];
		  }

		  //STEP TWO
		  $query=mysqli_query($connection, "SELECT * from stock 
			natural join cities 
		  	WHERE cities_id=$cities_id") or die('There Was An Error in Stock Query');
				if (mysqli_num_rows($query)>0 )
				{
					 while ($rows= mysqli_fetch_assoc($query)) 
					 {
					   $state_id[]= $rows['state_id'];
					   $state_name[]= $rows['state_name'];
					   $cities_id[]= $rows['cities_id'];
				  	$city_name[]= $rows['city_name'];
					  }
?>


<option> SELECT STATE:</option>

<?php 
while ($row=$result=>fetch_assoc())
 {

 	?>
<option value="<?php echo $cities_id[$a] ?>">
             	
             <?php echo $city_name[$a]?>	
             </option> 

<?php


}


?>