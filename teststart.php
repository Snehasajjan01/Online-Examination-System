
<?php ?>
<?php
session_start();
	require('./model/dbconnection.php');
	$catid=$_GET['catid'];
	$email=$_SESSION['email'];
	
	if(isset($_GET['btn_selectsubject'])){
		$testid=rand(1100,9999);
		$_SESSION['testid']=$testid;
		$sqlinsert="INSERT INTO testr(testid,email,catid) VALUES($testid,'$email',$catid)";
	$data1=mysqli_query($conn,$sqlinsert);
	echo "test start";
	#die();
	}
	
	$sqlSelect="SELECT * FROM qpaper WHERE catid=$catid order by RAND()";
	$data=mysqli_query($conn,$sqlSelect);	 
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skill Meter-Test Start</title>

    
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
								<li role="presentation"><a href="welcome.php">Home</a></li>
								<li role="presentation"><a href="viewprofile.PHP" >Profile</a></li>
								<li role="presentation"><a href="index.html">Logout</a></li>					
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="welcome.php">Welcome</a></li>
				<li>Test</li>			
			</div>		
		</div>	
	</div>
	
	
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>TEST</h2><hr>
                <p><b>Select Your Option And Click Next To Proceed</b></p><hr>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="sendmessage"></div>
                    <div id="errormessage"></div>
					
					<?php
					if(mysqli_num_rows($data)>0)
					{
						$row=mysqli_fetch_array($data);
							
					?>
                    <form action="./model/testdata.php" method="get" role="form" class="contactForm">
                            
                            <div class="form-group">
									<span style="color:#6e6e6e;"></span>
                                    <span style="color:#6e6e6e;">
									
							<?php echo $row['question'];?>
							</span>
                            
							<br>
                                    <input type="radio" name="answer" class="form-control1" value="A" /><span style="color:#6e6e6e;" > <?php echo $row['option_a'];?></span><br>
                                    <input type="radio" name="answer" class="form-control1" value="B" /> <span style="color:#6e6e6e;" ><?php echo $row['option_b'];?></span><br>
                                    
									<input type="radio" name="answer" class="form-control1" value="C" /> <span style="color:#6e6e6e;" ><?php echo $row['option_c'];?></span><br>
                                    
									<input type="radio" name="answer" class="form-control1" value="D" /> <span style="color:#6e6e6e;" ><?php echo $row['option_d'];?></span>
									<input type="hidden" name="catid"  value="<?php echo$catid;?>" /> 
									<input type="hidden" name="qid"  value="<?php echo$row['qid'];?>" /> 
                                    <div class="validation"></div>
                            </div>
							
							
                        <div class="text-center">
						<button type="submit" class="btn btn-primary btn-lg" name="btn_testdata" required="required">Next</button></div>
						<div class="text-center">
						<button type="submit" class="btn btn-primary btn-lg" name="btn_submittest" required="required" formaction="./Model/submittest.php">Submit Test</button></div>
                    </form>                       
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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
						&copy; All Rights Reserved.
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
    <script src="contactform/contactform.js"></script>
    
</body>
</html>
<?php } ?>