<?php 
include_once '../model/func.php';

if(isset($_GET['d']))
{
		$diarytitle = trim($_GET["d"]);

         if($diarytitle!="")
        {
           deleteDiary($diarytitle);
			header("location:../views/diaries.php");
            
        }
}

?>