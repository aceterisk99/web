<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$currentdate=getdate(date("U"));
include_once '../model/func.php';
include_once '../controller/story_controller.php';
include_once '../controller/diary_update.php';


if(isset($_GET['r']))
{
	$r=$_GET['r'];
	$d=$_GET['d'];

}

$story_id = "";
if(isset($_GET['story_id']))
{
	$story_id=$_GET['story_id'];

}

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
<link rel="stylesheet" type="text/css" href="css/stylecustom.css">
<link href="css/sweetalert.css" rel="stylesheet">


</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php  include_once 'headerbar.php'; ?>
<!--heder end here-->
<input type="text" id="exist" value="<?php echo $exist; ?>" hidden>
<input type="text" id="invalid" value="<?php echo $invalid; ?>" hidden>
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
			          <li id="update"><a href="#"><i class="fa fa-edit"></i> Update Diary</a></li> 
			          <?php $verify = storyRender($d);
                             if(count($verify) > 0){
			             ?>
			          <li id="delete"><a href="../controller/deletediary_controller.php?d=<?php echo $d?>"><i class="fa fa-trash"></i> Delete Diary</a></li> 
			             <?php } else { ?>

			           <li id="delete"><a href="../controller/deletediary2_controller.php?d=<?php echo $d?>"><i class="fa fa-trash"></i> Delete Diary</a></li>
			             <?php } ?>



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
				           <i class="fa fa-trash"> </i>
				        </div>
				        <div class="clearfix"> </div>
				    </div>			    
	               </div>
	               <!-- VIEW STORY FORM -->
	                <table class="table tab-border" id="1">
	                    <tbody>
	                    	<?php $viewStory = storyList($_SESSION["Id"],$d);
	                    	 foreach($viewStory as $vs){ ?>

	                        <tr class="unread checked">
                            
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>

	                            <td class="clickable-row">
	                            
	                            	    <button class="create" hidden="">this</button>
                                         <input type="text" class="link" value="story.php?r=<?php echo $r;?>&&d=<?php echo $d;?>&&story_id=<?php echo $vs['story_id']?>" hidden>

	                            	
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
	                        
	                        </tr>

	                         
	                        
	                    </tbody>
	                <?php }?>
	                </table>
	               <!-- VIEW STORY FORM -->

            <!-- //////////////////////UPDATE FORM\\\\\\\\\\\\\\\\\\\\\\\ -->

	                <div class="inbox-details-body" id="updateforms">
							<div class="alert alert-info">
								Please fill details to continue
							</div>
							<form method="POST" action="../controller/story_controller.php">
								<?php $storys = storyRender($story_id); 
                                   foreach ($storys as $key) {                         
								?>
							
								<div>
									<input type="text" class="form-control" name="storytitles" value="<?php echo $key['story_title']; ?>" required>
								</div>
								<div>
									<input type="date" class="form-control" name="storydates" value="<?php echo $key['story_date']; ?>" required>
								</div>
								<br>
								<div><textarea rows="6"  placeholder="Dear Diary :" name="storycontents"><?php echo $key['story_content']; ?></textarea>
								</div>
								<input type="text" value="<?php echo $r?>" name="diarytitles" hidden>
								<input type="text" value="<?php echo $d?>" name="diaryids" hidden>
								<input type="text" value="<?php echo $story_id;?>" name="story_idss" hidden>
									<div>
									<select class="form-control" name="privacy2">
									  <?php if($key['status'] != 'public') { ?>
										<option value="private" selected="">private</option>
										<option value="public">public</option>
									<?php } else { ?>
										<option value="private">private</option>
										<option value="public" selected="">public</option>

									<?php }  ?>


									</select>
								</div>

							
								<input class="btnup float-left" type="submit" name="update" value="Update"> 
							<?php } ?>
							</form>
 								<button class="btnss float-right" >Cancel</button>
						</div>



	               </div>   
               </div>
              
            </div>

          
<!-- ////////////////////////END OF UPDATE FORM\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

						<!-- UPDATE DIARY -->
			<div class="col-md-8 compose-right" id="updateformd">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Compose New Diary
						</div>
<?php
$row=getDiaryByID($d);
?>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Please fill details to continue
							</div>
							<form method="POST" action="../controller/diary_update.php">
<!-- 								<div><input type="text"  value="<?php echo $row['diary_label'];?> :" name="diarytitle" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $row['diary_label'];?>">
								
								</div> -->
								<input type="text" name="diaryid" value="<?php echo $d;?>" hidden>
								<input type="text" name="diarytitle" id="diarytitle" value="<?php echo $row['diary_label'];?>">
								<input type="text" name="datecreated" value="<?php echo $row['diary_datecreated'];?>" readonly>
								<input type="submit" name="update"> 
								<button class="btnss float-right" type="button">Cancel</button>
							</form>
 								

						</div>


					</div>
				</div>

			<!-- END UPDATE DIARY -->



<!-- ADD STORY FORM -->
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
								<div>
									<select class="form-control	" name="privacy">
										<option value="private">Private</option>
										<option value="public">Public</option>
									</select>
								</div>
								<input class="sub float-left" type="submit" name="compose">
							</form>
 							<button class="btns float-right" >Cancel</button>
						</div>


					</div>
				</div>
				<!-- END ADD STORY FORM -->





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

<script>
////////////SWEET ALERT START///////////////

var exist= $("#exist").val();
var invalid = $("#invalid").val();


if(exist!="")
{
	if(exist=='existing')
	{
	swal("Story Details Already Exist!"); 
     }
     else if(exist=='successful')

   {
	swal("Successful!");
    }
    else{
	swal("Fill All Fields");

    }

}
////////////SWEET ALERT END///////////////




///////////SEARCH///////////////
 $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
/////////////END SEARCH////////





	$(document).ready(function(){

  var shit = '<?php echo $story_id;?>';
  


  $("#updateforms").hide();
  if(shit!="")
 {

 	$('.unread').hide();
    $("#updateforms").show();

 }




$("#forms").hide();
$("#updateformd").hide();

$("#add").click(function(){
    $("#forms").show();
    $("#tab1").hide();
    $("#updateformd").hide();

});

$("#update").click(function(){
    $("#forms").hide();
    $("#tab1").hide();
  $("#updateforms").hide();
  $("#updateformd").show();
});


$(".btns").click(function(){
    $("#forms").hide();
    $("#tab1").show();
    $("#updateforms").hide();
 	$('.unread').show();
});


$(".btnss").click(function(){
	$("#tab1").show();
    $("#forms").hide();
  $("#updateforms").hide();
 	$('.unread').show();
        window.location.href = "story.php?r=<?php echo $r ?>&&d=<?php echo $d ?>";	
 	});


    $(".clickable-row").click(function() {

       window.location = $(this).find('.create').next('input').val();	
    });


	});
</script>
<!-- mother grid end here-->
</body>
</html>


                      
						
