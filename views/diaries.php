
<?php

include_once '../controller/diaryadd_controller.php';


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
    <div class="portlet-grid-page" id="1">  
                  
      <br>
    	<h2>Your Diaries</h2>	
             <?php foreach($viewDiary as $vd){ ?>
    	<div class="portlet-grid panel-primary"> 
    		 <div class="panel-heading">
    		      <h3 class="panel-title"><?php echo $vd["diary_datecreated"]; ?></h3>
    		  </div> 
    		  <div class="panel-body">
    		  	  <?php echo $vd["diary_label"]; ?>
    		  </div> 
              <div class="panel-footer"><a href="story.php?r=<?php echo $vd["diary_label"]; ?>&&d=<?php  echo $vd ["diary_id"]; ?>"><h4>View Diary</h4></a></div>
              
    	</div>  	
		<?php } ?>

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
</div>
</div>
<!--slider menu-->
    <?php include_once'sidebar.php';?>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<script type="text/javascript">

   $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".portlet-grid").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  
</script>
</body>
</html>
</html>


                      
