<?php
include_once '../model/func.php';

if(isset($_POST['compose']))
{
	$datecreated=trim($_POST['datecreated']);
	$diarytitle=trim($_POST['diarytitle']);
	
	
	if($datecreated!="" && $diarytitle!="")
	{

		$verifyDiary=verifyDiary($datecreated,$diarytitle);
		if(count($verifyDiary) > 0)
			header("location:../views/inbox-details.php?return=existing");
		else
		{
	     addUser($datecreated,$diarytitle);
		 header("location:../views/inbox-details.php?return=successful");
			
		}
	}
	else
	{
	 header("location:../views/inbox-details.php?return=invalid-input");
			
}

}


















