<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$currentdate=getdate(date("U"));

include_once '../controller/story_controller.php';

if(isset($_GET['r']))
{
	$r=$_GET['r'];
	$d=$_GET['d'];

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
    <div class="inbox">

    	  <h2><?php echo $r ?></h2>
    	  
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

    	 		
    	 	<div class="compose-bottom">
    	 		  <nav class="nav-sidebar">
					<ul class="nav tabs">
			         <br>
			          <li id="add"><a href="#tab5" data-toggle="tab"><i class="fa fa-envelope"></i> Add Story</a></li>                              
					</ul>
				</nav>
    	 	</div>
    	 </div>

    	 <div class="col-md-8 mailbox-content  tab-content tab-content-in">

    	 	<div class="tab-pane active text-style" id="tab1">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-trash"> </i>
				        </div>
				        <div class="clearfix"> </div>
				    </div>			    
	               </div>
	                <table class="table tab-border" id="1">
	                    <tbody>
	                    	<?php $viewStory = storyList($_SESSION["Id"],$d);
	                    	 foreach($viewStory as $vs){ ?>
	                        <tr class="unread checked">
	                            <a href="diaries.php"><td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                	<p style="width: 100px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; "><?php echo $vs["story_title"];?></p>
	                            </td>
	                            <td >
	                                	<p style="width: 50px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; "><?php echo $vs["story_content"];?> </p>
	                            
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                               <?php echo $vs["story_date"];?>
	                            </td>
	                        </a>
	                        </tr>
	                        
	                        
	                    </tbody>
	                <?php }?>
	                </table>



	               </div>   
               </div>
              
            </div>
             <div class="col-md-8 compose-right" id="forms">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Compose New Story
						</div>

						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to continue
							</div>
							<form method="POST" action="../controller/story_controller.php">
								<div><input type="text" value="<?php echo $d ?>" name="diaryid" hidden></div>
								<div><input type="text"  placeholder="Story Title :" name="storytitle" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Story Title';}">
								</div>
								<div>
									<input type="date" class="form-control" name="storydate" required>
								</div>
								<br>
								<div><textarea rows="6"  placeholder="Dear Diary :" name="storycontent" onfocus="this.placeholder = '';" onblur="if (this.placeholder == '') {this.placeholder = 'Dear Diary,';}"></textarea>
								</div>
								<input type="text" value="<?php echo $r?>" name="diarytitle" hidden>
								<input type="text" value="<?php echo $d?>" name="diaryid" hidden>

								<input class="float-left" type="submit" name="compose">
							</form>
 <button class="btns float-right" >Cancel</button>
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

<script>
	$(document).ready(function(){


$("#forms").hide();

$("#add").click(function(){
    $("#forms").show();
    $("#tab1").hide();
});
$(".btns").click(function(){
    $("#forms").hide();
    $("#tab1").show();
});

	});
	

</script>
<!-- mother grid end here-->
</body>
</html>


                      
						
