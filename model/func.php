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
function addDiary($diarydatecreated,$diary_label)
{
		$db = db();		
		$sql = "INSERT INTO diaries (diary_datecreated,diary_label) VALUES (?,?)";
		$s=$db->prepare($sql);
		$s->execute(array($diarydatecreated,$diary_label));
		$db = null;
}


function verifyDiary($diary_datecreated,$diary_label)
	{

		$db = db();
		$sql = "SELECT * FROM diaries where diary_datecreated = ? and diary_label=?";
		$s = $db->prepare($sql);
		$s->execute(array($diary_datecreated,$diary_label));
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

















