<div class="sidebar-menu" style="position: fixed;">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="#"><i class="fa fa-cogs"></i><span>Diary</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            
		            <li><a href="portlet.php">Diaries</a></li>		            
		          </ul>
		        </li>
		       
		        
		        
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Compose</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="inbox.php">Stories</a></li>
			            <li id="menu-academico-boletim" ><a href="inbox-details.php">Compose Diary</a></li>
			            <li id="menu-academico-boletim" ><a href="story.php">Compose Story</a></li>
		             </ul>
		        </li>
		         
		      </ul>
		    </div>
	 </div>
	 
	 <script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>