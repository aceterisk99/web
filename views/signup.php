<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$exist="";
$invalid="";

if(isset($_GET["return"]))
{
	$exist =trim($_GET["return"]);
}
if(isset($_GET["invalid"]))
{
	$invalid="Invalid Diary Title";
}	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Diary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet">
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--SWEET ALERT-->
<link href="css/sweetalert.css" rel="stylesheet">

</head>
<body>	
<!--inner block start here-->
<input type="text" id="exist" value="<?php echo $exist; ?>" hidden>
<input type="text" id="invalid" value="<?php echo $invalid; ?>" hidden>
<div class="signup-page-main">
     <div class="signup-main">  	
    	 <div class="signup-head">
				<h1>Sign Up</h1>
			</div>
			<div class="signup-block">
				<form method="POST" action="../controller/register_controller.php">
					<input type="text" name="lastname" placeholder="Lastname" required="">
					<input type="text" name="firstname" placeholder="Firstname" required="">
					<input type="text" name="mi" placeholder="Middle Initial" required="" maxlength="1">
					<input type="text" name="username" placeholder="Email" required="">
					<input type="password" name="password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="register" value="Sign up">														
				</form>
				<div class="sign-down">
				<h4>Already have an account? <a href="login.php"> Login here.</a></h4>
				  <h5><a href="index2.php">Go Back to Home</a></h5>
				</div>
			</div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<!-- <div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved</a> </p>
</div> -->	
<!--COPY rights end here-->
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<script src="js/jquery.sweet-alert.js"> </script>
<script src="js/sweetalert.min.js"> </script>
<script src="js/sweetalert-dev.js"> </script>

<!-- mother grid end here-->

 <script>
var exist= $("#exist").val();
var invalid = $("invalid").val();


if(exist!="")
{
	if(exist=='existing')
	{
	swal("Username Already Exist!"); 
     }
     else if(exist=='successful')

   {
	swal("Account created!");
    }
    else{
	swal("Please Fill All Fields!");

    }

}




</script> 
</body>
</html>


                      
						
