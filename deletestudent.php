<?php
$userid=$_GET['userid'];


	
	
	 require('./MODEL/dbconnection.php');
		$sqlDelete="DELETE FROM login_details WHERE userid='$userid'";
	$x=mysqli_query($conn,$sqlDelete);
	if($x>0)
	{
		echo "<br>Record Deleted Successfully";
		header('Location:studentlist.php');
	}
	else{
		echo "<br>Recordfailed";
		header('Location:studentlist.php?err=operationFailed');
	}



?>