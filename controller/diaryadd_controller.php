<?php
session_start();
include_once '../model/func.php';
$viewDiary = diaryList($_SESSION['Id']);
if(isset($_POST['compose']))
{
	$datecreated=trim($_POST['datecreated']);
	$diarytitle=trim($_POST['diarytitle']);
	$owner_id=$_SESSION['Id'];
	
	if($datecreated!="" && $diarytitle!="")
	{

		$verifyDiary=verifyDiary($owner_id,$diarytitle);
		if(count($verifyDiary) > 0)
			header("location:../views/inbox-details.php?return=existing");
		else
		{
	     addDiary($owner_id,$datecreated,$diarytitle);
		 header("location:../views/inbox-details.php?return=successful");
			
		}
	}
	else
	{
	 header("location:../views/inbox-details.php?return=invalid-input");
	}

}

if(isset($_POST['delete']))
{
		$fname = trim($_POST["efname2"]);
        $lname =trim($_POST["elname2"]);

         if($fname !="" && $lname !="" && $mname !="" && $address !="" && $email !="" && $phone !="" )
        {
            $delete = delete_employee($fname,$lname,$mname);
            header("location:employee.php");
        }
}


















