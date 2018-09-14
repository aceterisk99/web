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

	function selectUser()
	{

		$db = db();
		$sql = "SELECT * FROM owners where owner_id = ?";
		$s = $db->prepare($sql);
		$s->execute(array());
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
function deleteDiary($diarydatecreated,$diary_label)
	{
	

        $db = db(); 
		$sql = "DELETE FROM diaries WHERE diary_datecreated = ? and diary_label= ? ";
		$s = $db->prepare($sql);
		$s->execute(array($diarydatecreated,$diary_label));
		$db = null;

	}


function verifyDiary($ownerId,$diary_label)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where owner_id = ? and diary_label=?";
		$s = $db->prepare($sql);
		$s->execute(array($ownerId,$diary_label));
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
function addStory($diary_id,$story_date,$owner_id,$story_title,$story_content)
{
		$db = db();		
		$sql = "INSERT INTO stories (diary_id,story_date,owner_id,story_title,story_content) VALUES (?,?,?,?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($diary_id,$story_date,$owner_id,$story_title,$story_content));
		$db = null;
}

function verifyStory($diary_id,$story_date,$ownerId,$story_title)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where diary_id = ? and story_date=? and owner_id=? and story_title=?";
		$s = $db->prepare($sql);
		$s->execute(array($diary_id,$story_date,$ownerId,$story_title));
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

















