<?php
session_start();

require_once("../config/config.php");
//comfirm if ite  already exists in item table

$item=$_POST['cities_id'];
if ($item!='') {
$query=mysqli_query($connection, "SELECT * from cities WHERE city_name= LIKE 
	'$item%' ") or die('There Was An Error');
if (mysqli_num_rows($query)>0 )
{
 while ($rows= mysqli_fetch_assoc($query)) {
$existingItems[]= $rows['item_name'];
}
for ($a=0; $a <count($existingItems); $a++) { 
echo "<p>$existingItems[$a]</p>";
}
}
else {
echo "";
}
}

?>