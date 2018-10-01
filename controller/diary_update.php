<?php
include_once '../model/func.php';
session_start();
if(isset($_POST['update']))
{
	$diarytitle=trim($_POST['diarytitle']);
	$owner_id=$_SESSION['Id'];
	$d=trim($_POST['diaryid']);
	
	if($diarytitle!="")
	{

		$verifyDiary=verifyDiary($owner_id,$diarytitle);
		if(count($verifyDiary) > 0)
			header("location:../views/diaries.php?return=existing");
		else
		{
			updateDiary($diarytitle,$d);
		 header("location:../views/diaries.php?return=successful");
			
		}
	}
	else
	{
	header("location:../views/diaries.php?return=invalidinput");
}

}
