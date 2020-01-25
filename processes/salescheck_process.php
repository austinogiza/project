<?php
session_start();

require_once("../config/config.php");
//comfirm if ite  already exists in item table

$item=$_POST['item'];
if ($item!='') 
{
	$query=mysqli_query($connection, "SELECT item_id from items WHERE item_name LIKE 
		'%$item%' LIMIT 1 ") or die('There Was An Error');
	if (mysqli_num_rows($query)==1 )
	{
		 while ($rows= mysqli_fetch_assoc($query)) 
		 {
		   $item_id= $rows['item_id'];
		  }

		  //STEP TWO
		  $query=mysqli_query($connection, "SELECT * from stock 
			natural join items 
		  	WHERE item_id=$item_id") or die('There Was An Error in Stock Query');
				if (mysqli_num_rows($query)>0 )
				{
					 while ($rows= mysqli_fetch_assoc($query)) 
					 {
					   $stock_id[]= $rows['stock_id'];
					   $item_name[]= $rows['item_name'];
					   $item_id_from_stock[]= $rows['item_id'];
					   $price[]= $rows['price'];
					   $quantity_from_stock[]= $rows['quantity'];
					   $date_stocked[]= $rows['date'];

					  }

					 //STEP THREE
					  $exploded_stock_ids=implode(",",$stock_id);

					   $query=mysqli_query($connection, "SELECT * from sales WHERE stock_id IN ($exploded_stock_ids)") or die('There Was An Error in Sales Query');
							if (mysqli_num_rows($query)>0 )
							{
							while ($rows= mysqli_fetch_assoc($query)) 
							 {
							 	$sales_stock_id[]=$rows['stock_id'];
							 	$quantity_from_sales[]=$rows['quantity_sold'];
							 }
									for ($a=0; $a <count($sales_stock_id); $a++)
									{
									 $position=array_search($sales_stock_id[$a], $stock_id);
									 $quantity_from_stock[$position]=$quantity_from_stock[$position]-$quantity_from_sales[$a];
									}


							}
							
							for ($a=0; $a <count($stock_id); $a++)
							{
								if ($quantity_from_stock[$a]!=0) 
								{
	
							?> 

							  <p  data-price="<?php echo $price[$a] ?>" data-remaining="<?php echo $quantity_from_stock[$a] ?>" class="auto" style="cursor: pointer"> 
							  	 <?php echo $item_name[$a] ?>  |
							  	 <?php echo $quantity_from_stock[$a] ?>  | 
							  	 <?php echo "N".$price[$a] ?>  |
							  	 <?php echo date("d-M-Y h:i:s A", strtotime($date_stocked[$a])); ?>  
							  </p>

							<?php
						        }
							}

				}
				else
					echo "no_stock";

	}

	else 
	echo "no_item";
}





/*

*/
?>