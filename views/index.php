

<?php 
session_start();
include_once '../model/func.php';
if($_SESSION['Username']=="")
{
	header("location:index2.php");
}
?>


<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php  include_once 'headerbar.php'; ?>
<!--heder end here-->
<!--inner block start here-->
<div class="inner-block">
    <div class="portlet-grid-page">  
    	<h2>Public Stories</h2>	

   <?php $view = pubstory(); 
      if(count($view) > 0)
      {
      	foreach ($view as $key ) {
    ?>
    	<div class="portlet-grid panel-primary"> 
    		 <div class="panel-heading">
    		      <h3 class="panel-title"><?php echo $key['story_title']; ?></h3> 
    		  </div> 
    		  <div class="panel-body">
    		  	  <?php echo $key['story_content']; ?>
    		  </div> 
    		  <div class="panel-footer">

               <?php   $verify = confirmliker($_SESSION['Id'],$key['story_id']);
               if(count($verify) == 0) { ?>
    		 <a href="../controller/like.php?story_id=<?php echo $key['story_id']; ?>"><button class="btn btn-default glyphicon glyphicon-star-empty"><span>&nbsp;Like</span></button></a>

         <?php } else { ?>
    		 <a href="../controller/unlike.php?story_id=<?php echo $key['story_id']; ?>"><button class="btn btn-default glyphicon glyphicon-star"><span>&nbsp;unlike</span></button></a>
         <?php } ?>


           <div class="float-right">likes : <?php echo $key['likes']; ?></div>

    	</div>
    		  
    	</div> 
    	
  <?php } } ?>
		
		<div class="clearfix"> </div>
  </div>
</div>

<!--inner block end here-->
<!--copy rights start here-->
<!-- <?php
/*include_once 'footer.php';*/
?>	 -->
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <?php include_once'sidebar.php';?>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
		$(".unlike").hide();
	$(".like").click(function(){
		$(".like").hide();
		$(".unlike").show();
	});
	$(".unlike").click(function(){
		$(".like").show();
		$(".unlike").hide();
	});

///////////SEARCH

 $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".portlet-grid").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });



////////////END SEARCH

</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
                
