<?php 
session_start();
include_once '../model/func.php';

if(isset($_GET['story_id']))
{
		$story_id = trim($_GET["story_id"]);
		$liker = $_SESSION['Id'];

           unlike($story_id);
           unliker($liker,$story_id);

			header("location:../views/index.php");
            
        
}

?>