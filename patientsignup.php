<!DOCTYPE html>

<html class="no-js">


<head>
	<title>Patient Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<!-- <?php



	?> -->
     
     

	
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="css/shop.css">
	<link rel="stylesheet" type="text/css" href="./css/inbox.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<style>
		
		.inpbox{
			 
			border:1px solid #ddd;

		}
	</style>
	
</head>

<body>
	
	<div class="preloader">
		<div class="preloader_image"></div>
	</div>
	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"> 
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">
			<i class="rt-icon2-cross2"></i>
		</span>
	</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group bottommargin_0"> <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input"> </div> <button type="submit" class="theme_button">Search</button> </form>
		</div>
	</div>
	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			
		</div>
	</div>
	
	<div id="canvas">
		<div id="box_wrapper">
			
			<!-- Header Start -->
			<?php include('./comnpages/header.php'); ?>
			<!--Header End -->
			
			
			<section class="page_breadcrumbs ls ms section_padding_25 bg_image">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="small">Patient SignUp</h2>
						</div>
					</div>
					<ol class="breadcrumb bottom_breadcrumbs">
						<li> <a href="./">
						Home
						</a> </li>						 
						<li class="active">Patient SignUp</li>
					</ol>
				</div>
			</section>
			 
			 
			<section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="module-header">Registration</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 to_animate" data-animation="scaleAppear">
							<form method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-12">
										<div   class="inpbox" > 
											
											&nbsp <i class="fa fa-user highlight2"></i> 
									      <input type="text" style="border:none"  size="30"	 name="name" placeholder="Full Name">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div  class="inpbox" > 
										
											&nbsp <i class="fas fa-image highlight2" aria-hidden="true"></i>
											<input type="file" style="border:none;"    name="image" placeholder="Upload PIC">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div    class="inpbox"  >
											<!--<label for="email">Email address<span class="required">*</span></label>--> 
											&nbsp <i class="fa fa-envelope highlight2" aria-hidden="true"></i> 
											<input type="email" style="border:none;"  name="emailid" placeholder="Email Address">											
									    </div>
									</div>
									<div class="col-sm-6">
										<div    class="inpbox"  >
											<!--<label for="subject">Subject<span class="required">*</span></label>-->
											&nbsp <i class="fa fa-phone highlight2" aria-hidden="true"></i> 
											<input type="text" size="30" style="border:none;" name="contact" placeholder="Contact Number">											
										</div>
									</div>
                                    <div class="col-sm-6">
										<div    class="inpbox"  >
											
											&nbsp <i class="fas fa-key highlight2" aria-hidden="true"></i> 
										<input type="text" size="30" style="border:none;" name="password" placeholder="Password">											
										</div>
									</div> 
									
									
									<div class="col-sm-12">
										<div>
											
											
			<center><input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female</center>
										</div>
									</div> 
									
									
									

	<div class="col-sm-12">
										 
	<div class="form-group bottommargin_0 inpbox"   > 
											
	<textarea  rows="3" cols="45" style="width:100%; background:url(images.png)no-repeat;border:none;" name="address"  placeholder="Address"></textarea> 
	</div>
	</div>								
									
									

									
								 
									<div class="col-sm-12 bottommargin_0 ">
										<div >
											
											
											<button type="submit" id="contact_form_submit" name="submit" class="theme_button color2 wide_button margin_0">Submit</button> </div>
										</div>
									</div>
							</form>
						</div>
						<div class="col-md-4 to_animate mt-4" data-animation="scaleAppear">
		<img src="images/register.jpg" style = "width : 100% ; height : 360px">
						</div>
					</div>
				</div>
			</section>
			
			<!-- Start Footer -->
			<?php include('./comnpages/footer.php'); ?>			
			<!-- End Footer -->
			
			</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATkQioPpYthz2tngre4ll2h_trympOpxs	"></script>
</body>

</html>


<?php 
include "dbconfigure.php";
if(isset($_POST['submit']))
{
$name = $_POST['name'];

$emailid = $_POST['emailid'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$address = $_POST['address'];



move_uploaded_file($_FILES['image']['tmp_name'],"images/Patients/".$_FILES['image']['name']);

$image = "images/Patients/".$_FILES['image']['name'];


$query = "insert into patient(patientname,image,gender,emailid,contact,password,address) values('$name','$image','$gender','$emailid','$contact','$password','$address')";
$n = my_iud($query);
if($n==1)
{
echo '<script>alert("Signup Successful");
window.location="patientlogin.php";
</script>';
}
else
{
echo '<script>alert("Something went wrong,Try Again...")</script>';
}
}
?>
