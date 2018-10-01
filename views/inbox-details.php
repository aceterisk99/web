<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$date = date('Y-m-d');
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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/sweetalert.css" rel="stylesheet">
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
				<?php  include_once 'headerbar2.php'; ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		
		<!-- /script-for sticky-nav -->
<!--inner block start here-->



<input type="text" id="exist" value="<?php echo $exist; ?>" hidden>
<input type="text" id="invalid" value="<?php echo $invalid; ?>" hidden>

<div class="inner-block">
    <div class="inbox">
    	  <h2>Diaries</h2>
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
    	 	<!-- <div class="compose-bottom">
    	 		<ul>
    	 			<li id="add"><a href="#"><i class="fa fa-trash-o"> </i>Compose</a></li>
    	 		</ul>
    	 	</div>
 -->    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Compose New Diary
						</div>

						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to continue
							</div>
							<form method="POST" action="../controller/diaryadd_controller.php">
								<div><input type="text"  placeholder="Diary Title :" name="diarytitle" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Diary Title';}">
								
								</div>
								<input type="text" name="datecreated" value="<?php echo "$date";?>" readonly>
								<input type="submit" name="compose" id="compose"> 
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
/*include_once 'footer.php';*/
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
<script src="js/jquery.sweet-alert.js"> </script>
<script src="js/sweetalert.min.js"> </script>
<script src="js/sweetalert-dev.js"> </script>

<!-- mother grid end here-->

 <script>
var exist= $("#exist").val();
var invalid = $("#invalid").val();


if(exist!="")
{
	if(exist=='existing')
	{
	swal("Title Existing!"); 
     }
     else if(exist=='successful')

   {
	swal("Diary Created!");
    }
    else{
	swal("Fill THE ONE AND ONLY FIELD!!!");

    }

}





</script> 
</body>
</html>


                      
						
