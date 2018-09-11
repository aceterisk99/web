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
    	  <h2>Stories</h2>
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
			          <li class=""><a href="#tab5" data-toggle="tab"><i class="fa fa-trash-o"></i>Delete</a></li>                              
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
	                <table class="table tab-border">
	                    <tbody>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                Google
	                            </td>
	                            <td>
	                                Lorem Ipsum is simply
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                12 march
	                            </td>
	                        </tr>
	                        
	                    </tbody>
	                </table>
	               </div>   
               </div>
               <div class="tab-pane text-style" id="tab2">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>
	                       
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                            	<input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                02 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Adobe
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                15 march
	                            </td>
	                        </tr>	                       
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                14 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                11 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                20 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                           <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                25 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                26 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                28 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>	                        
	                    </tbody>
	                </table>
	               </div>   
               </div>
               <div class="tab-pane text-style" id="tab3">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>
	                       
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                            	<input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                02 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Adobe
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                Google
	                            </td>
	                            <td>
	                                Lorem Ipsum is simply
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                12 march
	                            </td>
	                        </tr>	                       	                       
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>	                        	                                         	                                    
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>	                                                                    
	                    </tbody>
	                </table>
	               </div>   
               </div>
               <div class="tab-pane text-style" id="tab4">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>	                       
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Adobe
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"> </i>
	                            </td>
	                            <td class="hidden-xs">
	                                Google
	                            </td>
	                            <td>
	                                Lorem Ipsum is simply
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                12 march
	                            </td>
	                        </tr>	                       	                       
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>	                        	                                         	                                    
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>	                                                                    
	                    </tbody>
	                </table>
	               </div>   
               </div>
               <div class="tab-pane text-style" id="tab5">
	    	 	<div class="mailbox-border">
	               <div class="mail-toolbar clearfix">
				     <div class="float-left">
				        <div class="btn btn_1 btn-default mrg5R">
				           <i class="fa fa-refresh"> </i>
				        </div>
				        <div class="dropdown dropdown-inbox">
				            <a href="#" title="" class="btn btn-default" data-toggle="dropdown" aria-expanded="false">
				                <i class="fa fa-cog icon_8"></i>
				                <i class="fa fa-chevron-down icon_8"></i>
				            <div class="ripple-wrapper"></div></a>
				            <ul class="dropdown-menu float-right">
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-pencil-square-o icon_9"> </i>
				                        Edit
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-calendar icon_9"> </i>
				                        Schedule
				                    </a>
				                </li>
				                <li>
				                    <a href="#" title="">
				                        <i class="fa fa-download icon_9"> </i>
				                        Download
				                    </a>
				                </li>
				                <li class="divider"></li>
				                <li>
				                    <a href="#" class="font-red" title="">
				                        <i class="fa fa-times" icon_9=""> </i>
				                        Delete
				                    </a>
				                </li>
				            </ul>
				        </div>
				        <div class="clearfix"> </div>
				    </div>
				    <div class="float-right">
	                            <span class="text-muted m-r-sm">Showing 20 of 346 </span>
	                            <div class="btn-group m-r-sm mail-hidden-options" style="display: inline-block;">
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Social</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                        <li><a href="#">Updates</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Spam</a></li>
	                                        <li><a href="#">Trash</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">New</a></li>
	                                    </ul>
	                                </div>
	                                <div class="btn-group">
	                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
	                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
	                                        <li><a href="#">Work</a></li>
	                                        <li><a href="#">Family</a></li>
	                                        <li><a href="#">Social</a></li>
	                                        <li class="divider"></li>
	                                        <li><a href="#">Primary</a></li>
	                                        <li><a href="#">Promotions</a></li>
	                                        <li><a href="#">Forums</a></li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="btn-group">
	                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
	                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
	                            </div>	
	                       <div class="clearfix"> </div>		        
				    </div>
	               </div>
	                <table class="table tab-border">
	                    <tbody>	                        
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Apple
	                            </td>
	                            <td>
	                                Hai Neha.How are You
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                4 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Microsoft
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                1 march
	                            </td>
	                        </tr>	                        
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                20 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                           <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                25 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                26 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                            </td>
	                            <td>
	                                28 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star icon-state-warning"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Lorem ipsum dolor sit amet
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                06 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Twitter
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                8 march
	                            </td>
	                        </tr>
	                        <tr class="unread checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Consectetuer adipiscing elit
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                10 march
	                            </td>
	                        </tr>
	                        <tr class="read checked">
	                            <td class="hidden-xs">
	                                <input type="checkbox" class="checkbox">
	                            </td>
	                            <td class="hidden-xs">
	                                <i class="fa fa-star"></i>
	                            </td>
	                            <td class="hidden-xs">
	                                Dropbox
	                            </td>
	                            <td>
	                                Nemo enim ipsam voluptatem
	                            </td>
	                            <td>
	                                <i class="fa fa-paperclip"></i>
	                            </td>
	                            <td>
	                                16 march
	                            </td>
	                        </tr>
	                    </tbody>
	                </table>
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


                      
						
