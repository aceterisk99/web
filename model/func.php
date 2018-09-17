<?php

function db(){
	return new PDO("mysql:host=localhost; dbname=diary;", 'root', '');	
}

function compare($username,$password)
{

	$db = db();
		$sql = "SELECT * FROM owners where owner_username = ? and owner_password= ? ";
		$s = $db->prepare($sql);
		$s->execute(array($username,$password));
		$user = $s->fetchAll();
		$db = null;
		return $user;
}

function addUser($lastname,$firstname,$mi,$username,$password)
	{
		$db = db();		
		$sql = "INSERT INTO owners (owner_lastname,owner_firstname,owner_mi,owner_username,owner_password) VALUES (?,?,?,?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($lastname,$firstname,$mi,$username,$password));
		$db = null;
		
	}

	function getUser($id)
	{
		$db = db();
		$sql = "SELECT * FROM owners where owner_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array($id));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}

	function updateUser($owner_id,$owner_lastname,$owner_firstname,$owner_mi,$owner_username,$owner_password)
	{
		$db = db();
		$sql = "UPDATE owners SET owner_lastname= ?,owner_firstname= ?,owner_mi= ?,owner_username= ?,owner_password= ? where owner_id= ?";
		$s = $db->prepare($sql);
		$s->execute(array($owner_lastname,$owner_firstname,$owner_mi,$owner_username,$owner_password,$owner_id));
		$user = $s->fetchAll();
		$db = null;
		return $user;	
	}

	function verifyUser($username)
	{

		$db = db();
		$sql = "SELECT * FROM owners where owner_username = ?";
		$s = $db->prepare($sql);
		$s->execute(array($username));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}



function addDiary($owner_id,$diarydatecreated,$diary_label)
{
		$db = db();		
		$sql = "INSERT INTO diaries (owner_id,diary_datecreated,diary_label) VALUES (?,?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($owner_id,$diarydatecreated,$diary_label));
		$db = null;
}
function deleteDiary($id)
	{
	

        $db = db(); 
		$sql = "DELETE diaries,stories FROM diaries INNER join stories WHERE diaries.diary_id = stories.diary_id and diaries.diary_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array($id));
		$db = null;
	}
	function deleteDiaryS($id)
	{
	

        $db = db(); 
		$sql = "DELETE FROM diaries where diary_id=?";
		$s = $db->prepare($sql);
		$s->execute(array($id));
		$db = null;
	}


function verifyDiary($ownerId,$diary_datecreated,$diary_label)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where owner_id = ? and diary_datecreated=? and diary_label=?";
		$s = $db->prepare($sql);
		$s->execute(array($ownerId,$diary_datecreated,$diary_label));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}

	function diaryList($id)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where owner_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array($id));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}
		function getDiaryByID($id)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where diary_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array($id));
		$user = $s->fetch();
		$db = null;
		return $user;
	}
function addStory($diary_id,$story_date,$owner_id,$story_title,$story_content,$status)
{
		$db = db();		
		$sql = "INSERT INTO stories (diary_id,story_date,owner_id,story_title,story_content,status,likes) VALUES (?,?,?,?,?,?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($diary_id,$story_date,$owner_id,$story_title,$story_content,$status,0));
		$db = null;
}

function verifyStory($diary_id,$story_date,$ownerId,$story_title)
	{

		$db = db();
		$sql = "SELECT * FROM stories where diary_id = ? and story_date=? and owner_id=? and story_title=?";
		$s = $db->prepare($sql);
		$s->execute(array($diary_id,$story_date,$ownerId,$story_title));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}
	function verifyStoryDate($story_date)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where story_date=?";
		$s = $db->prepare($sql);
		$s->execute(array($story_date));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}
	function verifyStoryTitle($story_title)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where story_title=?";
		$s = $db->prepare($sql);
		$s->execute(array($story_title));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}


	function storyList($owner_id,$diary_id)
	{

		$db = db();
		$sql = "SELECT * FROM stories where owner_id = ? and diary_id=?";
		$s = $db->prepare($sql);
		$s->execute(array($owner_id,$diary_id));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}

	function storyRender($id)
	{

		$db = db();
		$sql = "SELECT * FROM stories where story_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array($id));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}
function updateDiary($title,$id)
	{
		$db = db();
		$sql = "UPDATE diaries SET diary_label=? where diary_id=?";
		$s = $db->prepare($sql);
		$s->execute(array($title,$id));
		$user = $s->fetchAll();
		$db = null;
		return $user;	
	}
	function updateStory($diary_id,$story_date,$owner_id,$story_title,$story_content,$status,$story_id)
{
		$db = db();		
		$sql = "UPDATE stories SET diary_id=?,story_date=?,owner_id=?,story_title=?,story_content=?,status=? where story_id =?";
		$s=$db->prepare($sql);
		$s->execute(array($diary_id,$story_date,$owner_id,$story_title,$story_content,$status,$story_id));
		$db = null;
}

function pubstory()
{
		$db = db();		
		$sql = "SELECT * from stories where status = ?";
		$s=$db->prepare($sql);
		$s->execute(array('public'));
		$user = $s->fetchAll();
		$db = null;
		return $user;	
}
function like($story_id)
{
		$db = db();		
		$sql = "UPDATE stories SET likes= likes + 1 where story_id =?";
		$s=$db->prepare($sql);
		$s->execute(array($story_id));
		$db = null;
}

function liker($owner_id,$story_id)
{
		$db = db();		
		$sql = "INSERT INTO liker (liker_id,story_id) VALUES (?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($owner_id,$story_id));
		$db = null;
}

function unlike($story_id)
{
		$db = db();		
		$sql = "UPDATE stories SET likes= likes - 1 where story_id =?";
		$s=$db->prepare($sql);
		$s->execute(array($story_id));
		$db = null;
}

function unliker($owner_id,$story_id)
{
		$db = db();		
		$sql = "DELETE  from liker where story_id = ? and liker_id = ?";
		$s=$db->prepare($sql);
		$s->execute(array($story_id,$owner_id));
		$db = null;
}
	function confirmliker($id,$story_id)
	{

		$db = db();
		$sql = "SELECT * FROM liker where story_id = ?  and liker_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array($story_id,$id));
		$user = $s->fetchAll();
		$db = null;
		return $user;
	}

/*function viewDiary()
	{
		

     $db = db();
	$sql = "SELECT * FROM ";
	$s = $db->query($sql);
	$user = $s->fetchAll();

	$db = null;
	return $user;
}



	
function check_Employee($fname,$lname)
	{
		$db = db();
		$sql = "SELECT * FROM employee_list where fname = ? and lname= ? ";
		$s = $db->prepare($sql);
		$s->execute(array($fname,$lname));
		$user = $s->fetch();
		$db = null;
		return $user;
	}



function employee($fname,$lname,$mname,$address,$numbers,$email)
	{
		$db = db();		
		$sql = "INSERT INTO employee_list fname,lname,mname,address,numbers,email VALUES (?,?,?,?,?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($fname,$lname,$mname,$address,$numbers,$email));
		$user = $s->fetch();
		$db = null;
		return $user;
	}


function delete_Employee($fname,$lname,$mname)
	{
	

        $db = db(); 
		$sql = "DELETE FROM employee_list WHERE fname = ? and lname = ? and mname = ? ";
		$s = $db->prepare($sql);
		$s->execute(array($fname,$lname,$mname));
		$db = null;

	}


function add_Employees()
	{
		$db = db();		
		$sql = "INSERT INTO employee_list fname,lname,mname,address,numbers,email VALUES (?,?,?,?,?,?)";
		$s=$db->prepare($sql);
		$s->execute(array("bogo","bogo","bogo","bogo","bogo","bogo"));
		$user = $s->fetch();
		$db = null;
		return $user;
	}



*/

















