<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$currentdate=getdate(date("U"));

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
    	  <h2>Inbox Details</h2>
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<a href="#"><img src="images/b3.png" alt=""></a>
    	 		</div>
    	 		<div class="mailer-name"> 			
    	 				<h5><a href="#"><?php echo $_SESSION['Lastname'].",".$_SESSION['Firstname']; ?></a></h5>  	 				
    	 			       
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	 	<div class="compose-bottom">
    	 		<ul>
    	 			<li><a href="#"><i class="fa fa-trash-o"> </i>Trash</a></li>
    	 		</ul>
    	 	</div>
    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Compose New Diary
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to send a new message
							</div>
							<form method="POST" action="../controller/diaryadd_controller.php">
								<input type="text"  value="Diary title :" name="diarytitle" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'diarytitle';}">
								<input type="text" name="datecreated" value="<?php $currentdate;?>" hidden>
								<input type="submit" value="compose"> 
							</form>
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


                      
						
