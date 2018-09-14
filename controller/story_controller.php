<?php
session_start();
include_once '../model/func.php';



if(isset($_POST['compose']))
{
	$storytitle=trim($_POST['storytitle']);
	$storydate=trim($_POST['storydate']);
	$storycontent=trim($_POST['storycontent']);
	$diary_id=trim($_POST['diaryid']);
	$owner_id=$_SESSION['Id'];
	$diarytitle=trim($_POST['diarytitle']);
	$diaryid=trim($_POST['diaryid']);

	
	if($storytitle!="" && $storydate!="" && $storycontent!="")
	{

		$verifyStory=verifyStory($diary_id,$storydate,$owner_id,$storytitle);
		if(count($verifyStory) > 0)
			header("location:../views/story.php?return=existing");
		else
		{
	     addStory($diary_id,$storydate,$owner_id,$storytitle,$storycontent);
		 header("location:../views/story.php?return=successful&&r=".$diarytitle."&&d=".$diaryid);
			
		}
	}
	else
	{
	 header("location:../views/story.php?return=invalid-input");
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


















