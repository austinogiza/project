<?php
session_start();  

require_once("../config/config.php");
//

$city=$_POST['city'];

if($city!='')
{
	$query=mysqli_query($connection, "SELECT  city_name,cities_id from cities WHERE state_id ='$city'") or die('There Was An Error');
	if (mysqli_num_rows($query)>0)
	{
		
		 while ($rows = mysqli_fetch_assoc($query)) 
		 {
		   $cities_id[]= $rows['cities_id'];
      $city_name[]= $rows['city_name'];

		  }
		}

}


for($a=0;$a<count($cities_id);$a++)
{
?>

<option class="delete" value="<?php echo $cities_id[$a]?>"> <?php echo $city_name[$a] ?> </option>

<?php
}
?>