<?php
session_start();
require('./model/dbconnection.php');
	$sqlSelect="SELECT * FROM papercat";
	$data=mysqli_query($conn,$sqlSelect);
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Skill Meter-Add Questions</title>

    
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
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="adminwelcome.html">Home</a></li>
				<li>Add Questions</li>			
			</div>		
		</div>	
	</div>
	
	
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Add New Questions</h2><hr>
                <p><b>Select Subject And Add Question With Answer</b></p><hr>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                
                    <form action="./model/questionpaper.php" method="post" role="form" class="contactForm">
                            <div class="form-group">
                    <select name="catid" class="form-control" id="catid">
                    <?php
						if(mysqli_num_rows($data)>0)
						{
							while($row=mysqli_fetch_array($data))
							{
					?>
						<option value="<?php echo $row['catid'];?>">
							<?php echo $row['catname'];?>
						</option>
					<?php } }?>
					</select>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="question" id="question" placeholder="Enter Question"  />
                                    
                            </div>
							<div class="form-group">
                                    <input type="text" name="option_a" class="form-control" id="option_a" placeholder="Option A"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group">
                                    <input type="text" name="option_b" class="form-control" id="option_b" placeholder="Option B"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group">
                                    <input type="text" name="option_c" class="form-control" id="option_c" placeholder="Option C"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group">
                                    <input type="text" name="option_d" class="form-control" id="option_d" placeholder="Option D"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group">
                                    <input type="text" name="answer" class="form-control" id="answer" placeholder="Correct Answer"  />
                                    <div class="validation"></div>
                            </div>
							
							<div class="form-group">
                            <select name="status" class="form-control" id="status">
                                    
							<option>Active</option>
							<option>Disable</option>
							</select>
                            </div>
							
                            
                            
                        <div class="text-center"><button type="submit" name="btn_questionpaper" class="btn btn-primary btn-lg" required="required">Save</button></div>
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
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>