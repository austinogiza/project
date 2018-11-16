
<div class="menu">
<?php if( isset($_SESSION['is_staff_admin']) && $_SESSION['is_staff_admin']==1)
{
?>		
<div id="createstaff">
<label><a href="create_staff.php"  class="logoutstaff">Create Staff </a>

</label>
</div>
<?php
}
?>

<div id="viewstaff">
	<label><a href="viewstaff.php"  class="logoutstaff">View Staff</a></label>
</div>
<div id="viewstaff">
	<label><a href="item.php"  class="logoutstaff">Create Item</a></label>
</div>
<div id="viewstaff">
	<label><a href="addstock.php"  class="logoutstaff">Add Stock</a></label>
</div>
<div id="viewstaff">
	<label><a href="sales.php"  class="logoutstaff">Sales</a></label>
</div>
<div id="viewstaff">
	<label><a href="addcities.php"  class="logoutstaff">Record Sales</a></label>
</div>
<div id="viewstaff">
	<label><a href="processes/logout_process.php"  class="logoutstaff">Logout</a></label>
</div>