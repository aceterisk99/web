<?php
include_once '../model/func.php';
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
<script src="js/Chart.min.js"></script>
</head>
<body>	
<div class="page-container">	
   
	   <div class="mother-grid-inner">

            <!--header start here-->

				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>Diary</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<br>
									<li><a href="login.php" class="glyphicon glyphicon-off">Login</a>&nbsp;&nbsp;&nbsp;
									<a href="signup.php" class="glyphicon glyphicon-upload">Sign-up</a></li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
				<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("absolute");
				}else{
					$(".header-main").removeClass("absolute");
				}
			 });
			 
		});
		</script>


<!--heder end here-->
<div class="inner-block">
<div class="portlet-grid-page">  
    			<br>
    			<?php  $view=pubstory();

    			 foreach($view as $key){
    			 ?>
    	<div class="portlet-grid panel-primary"> 
    		 <div class="panel-heading">
    		      <h3 class="panel-title"><?php echo $key['story_title']; ?></h3>
    		  </div> 
    		  <div class="panel-body"><?php echo $key['story_content']; ?>
    		  </div> 
    		  <div class="panel-footer">
           <div class="float-right">Likes : <?php echo $key['likes']; ?></div>
    		  </div>
    		  
    		  </div>
			<?php }?>
    		  
    	</div>  	
		
		

		
		<div class="clearfix"> </div>
  </div>
</div>
<!--inner block end here-->	
<!--copy rights start here-->


<!-- <?php
/*include_once 'footer.php';*/
?> -->	
<!--COPY rights end here-->

</div>
<!--slider menu-->

    


	
</div>

		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     