<?php
session_start();  

require_once("../config/config.php");
$search=$_POST['search'];

$sql = "SELECT * items WHERE item_name LIKE '%$search'";
$query=mysqli_query($connection, $sql) or die('There Was An Error');

if (mysqli_num_rows($query)>0) { 

while ($rows = mysqli_fetch_assoc($query)) 
		 {
		   $cities_id[]= $rows['cities_id'];
      $city_name[]= $rows['city_name'];

		  }
	
} 

else { 
	echo "Data Not Found";

}


?>