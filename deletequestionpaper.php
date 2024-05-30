<?php
$qid=$_GET['qid'];


	
	
	 require('./MODEL/dbconnection.php');
		$sqlDelete="DELETE FROM qpaper WHERE qid='$qid'";
	$x=mysqli_query($conn,$sqlDelete);
	if($x>0)
	{
		#echo "<br>Record Deleted Successfully";
		header('Location:showquestionpaper.php');
	}
	else{
		header('Location:showquestionpaper.php?err=operationFailed');
	}



?>