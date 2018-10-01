<?php
include_once '../model/func.php';
include_once 'diary_update.php';





if(isset($_POST['compose']))
{
	$storytitle=trim($_POST['storytitle']);
	$storydate=trim($_POST['storydate']);
	$storycontent=trim($_POST['storycontent']);
	$diary_id=trim($_POST['diaryid']);
	$owner_id=$_SESSION['Id'];
	$diarytitle=trim($_POST['diarytitle']);
	$diaryid=trim($_POST['diaryid']);
	$privacy=trim($_POST['privacy']);

	if($storytitle!="" && $storydate!="" && $storycontent!="")
	{
		$verifyStory=verifyStory($owner_id,$storytitle);
		$verifyStoryDate=verifyStoryDate($storydate);
		if(count($verifyStory)> 0 or count($verifyStoryDate)> 0)
		{
			header("location:../views/story.php?return=existing&&r=".$diarytitle."&&d=".$diaryid);
		}
		else
		{
	     addStory($diary_id,$storydate,$owner_id,$storytitle,$storycontent,$privacy);
		 header("location:../views/story.php?return=successful&&r=".$diarytitle."&&d=".$diaryid);
		}


	}
	else
	{
	 header("location:../views/story.php?return=invalid-input");
	}
}





if(isset($_POST['update']))
{
	$storytitle=trim($_POST['storytitles']);
	$storydate=trim($_POST['storydates']);
	$storycontent=trim($_POST['storycontents']);
	$diary_id=trim($_POST['diaryids']);
	$owner_id=$_SESSION['Id'];
	$diarytitle=trim($_POST['diarytitles']);
	$diaryid=trim($_POST['diaryids']);
	$story_id=trim($_POST['story_idss']);
	$privacy=trim($_POST['privacy2']);



	
	if($storytitle!="" && $storydate!="" && $storycontent!="")
	{

		$verifyStory=verifyStory($diary_id,$storydate,$owner_id,$storytitle);
		

		if(count($verifyStory)> 1 ){
			header("location:../views/story.php?return=existing&&r=".$diarytitle."&&d=".$diaryid);
		}
		else
		{
	     updateStory($diary_id,$storydate,$owner_id,$storytitle,$storycontent,$privacy,$story_id);
		 header("location:../views/story.php?return=successful&&r=".$diarytitle."&&d=".$diaryid);
			
		}
	}
	else
	{
	 header("location:../views/story.php?return=invalid&&r=".$diarytitle."&&d=".$diaryid);
	}

}

















