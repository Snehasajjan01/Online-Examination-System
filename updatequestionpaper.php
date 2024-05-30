<?php

$qid=$_GET['qid'];
require('./model/dbconnection.php');
	echo $sqlSelect="SELECT * FROM qpaper where qid='$qid'";
	$data=mysqli_query($conn,$sqlSelect);
	if(mysqli_num_rows($data)>0)
	{
		$row=mysqli_fetch_array($data);
		




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skill Meter-Edit Question</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>Skill</span>Meter</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="adminwelcome.html">Home</a></li>
								<li role="presentation"><a href="showcategories.php">Subjects</a></li>
								<li role="presentation"><a href="showquestionpaper.php" class="active">Questions</a></li>
								<li role="presentation"><a href="studentlist.php">Students</a></li>							
								<li role="presentation"><a href="index.html">Logout</a></li>						
							</ul></div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="adminwelcome.html">Home</a></li>
				<li>Edit Question</li>			
			</div>		
		</div>	
	</div>
	
	<div class="services">
		<div class="container">
			<h3 align="center">Edit Question</h3>
			
			
			
			<div class="col-md-6">
				<div class="media">
				<form action="./model/updatequestionpaper.php" method="POST">
				
				<table class="table bordered">
		
				<tr>
						<td><span style="color:#6e6e6e;">Serial No</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="INT" NAME="qid" VALUE="<?php echo $row['qid'];?>" readonly>
							 </span>
						</td>
					</tr>
					
					<tr>
						<td><span style="color:#6e6e6e;">Question</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="question" VALUE="<?php echo $row['question'];?>" >
							 </span>
						</td>
					</tr>
					<tr>
						<td><span style="color:#6e6e6e;">Option A</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="option_a" VALUE="<?php echo $row['option_a'];?>" >
							 </span>
						</td>
					</tr>
					<tr>
						<td><span style="color:#6e6e6e;">Option B</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="option_b" VALUE="<?php echo $row['option_b'];?>" >
							 </span>
						</td>
					</tr>
					<tr>
						<td><span style="color:#6e6e6e;">Option C</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="option_c" VALUE="<?php echo $row['option_c'];?>" >
							 </span>
						</td>
					</tr>
					<tr>
						<td><span style="color:#6e6e6e;">Option D</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="option_d" VALUE="<?php echo $row['option_d'];?>" >
							 </span>
						</td>
					</tr>
					<tr>
						<td><span style="color:#6e6e6e;">Answer</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="answer" VALUE="<?php echo $row['answer'];?>" >
							 </span>
						</td>
					</tr>
					<tr>
						<td><span style="color:#6e6e6e;">Status</span></td>
						<td>
							<span style="color:#6e6e6e;">
							<INPUT TYPE="TEXT" NAME="status" VALUE="<?php echo $row['status'];?>" >
							 </span>
						</td>
					</tr>
					
					
					
					
					
					<tr>
					<td>
					<div class="text-center">
					<button type="submit" name="btn_updatequestionpaper" class="btn btn-primary btn-lg" required="required">Save</button></div>
					</td>
					</tr>
				</table>
				                        
				<form>
					
				</div>
			</div>
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-6">
				<div class="media">
					
				</div>
			</div>
						
			
		</div>
	</div>
	
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy;  All Rights Reserved.
                        <div class="credits">
                            
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/"></a><a href="https://bootstrapmade.com/"></a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
    
</body>
</html>
<?php } ?>