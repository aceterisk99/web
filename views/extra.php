<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include_once '../model/func.php';
$id=$_SESSION['Id'];
$user=getUser($id);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Diary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php  include_once 'headerbar.php'; ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="inbox">
    	  <h2>Profile Details</h2>
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<a href="#"><img src="images/b3.png" alt=""></a>
    	 		</div>
    	 		<div class="mailer-name"> 			
    	 				<h5><a href="#"><h5><a href="#"><?php echo $_SESSION['Lastname'].",".$_SESSION['Firstname']; ?></a></h5> </a></h5>  	 				
    	 			      
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							<div class="alert alert-info">
								Update Profile
							</div>
						</div>
						<div class="inbox-details-body">
							<?php foreach ($user as $gu){ ?>
								
							
							<form method="POST" action="../controller/updateuser_controller.php">
								<input type="text" name="lastname" value="<?php echo $gu['owner_lastname']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $gu['owner_lastname']?>';}">
								<input type="text" name="firstname" value="<?php echo $gu['owner_firstname']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $gu['owner_firstname']?>';}">
								<input type="text" name="mi" value="<?php echo $gu['owner_mi']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $gu['owner_mi']?>';}">
								<input type="text" name="username" value="<?php echo $gu['owner_username']?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $gu['owner_username']?>';}">
								<input type="password" class="form-control" name="password" value="<?php echo base64_decode($gu['owner_password'])?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo base64_decode($gu['owner_password'])?>';}">

								
								<br>
								<input type="submit" name="update" value="Update"> 
							</form>
							<?php } ?>
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<?php
include_once 'footer.php';
?>		
<!--COPY rights end here-->
</div>

<!--slider menu-->
 <?php include_once'sidebar.php';?>
	<div class="clearfix"> </div>
</div>

		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
