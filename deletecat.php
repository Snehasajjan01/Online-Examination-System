<?php
$catid=$_GET['catid'];


	
	
	 require('./MODEL/dbconnection.php');
		$sqlDelete="DELETE FROM papercat WHERE catid='$catid'";
	$x=mysqli_query($conn,$sqlDelete);
	if($x>0)
	{
		#echo "<br>Record Deleted Successfully";
		header('Location:showcategories.php');
	}
	else{
		header('Location:showcategories.php?err=operationFailed');
	}



?>