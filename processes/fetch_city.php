<?php
session_start();  

require_once("../config/config.php");
//comfirm if ite  already exists in item table

$state_id=$_POST['city'];
if ($state_id!='') 
{
	$query=mysqli_query($connection, "SELECT city_name,cities_id from cities WHERE state_id = '$state_id' ") or die('There Was An Error');
	if (mysqli_num_rows($query)>0 )
	{
		 while ($rows= mysqli_fetch_assoc($query)) 
		 {
		   $city_id[]= $rows['cities_id'];
      $city_name[]= $rows['city_name'];
		  }


for($a=0;$a<count($city_id);$a++)
{
?>
<option value="<?php echo $cities_id[$a] ?>"> <?php echo $city_name[$a] ?>"></option>

<?php

?>