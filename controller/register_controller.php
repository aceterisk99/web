<?php
include_once '../model/func.php';

if(isset($_POST['register']))
{
	$lastname=trim($_POST['lastname']);
	$firstname=trim($_POST['firstname']);
	$mi=trim($_POST['mi']);
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	
	if($username!="" && $password!="" && $lastname!="" && $firstname!="" && $mi!="")
	{

		$verifyUser=verifyUser($username);
		if(count($verifyUser) > 0)
			header("location:../views/login.php?return=existing");
		else
		{
			$password = md5($password);
		addUser($lastname,$firstname,$mi,$username,$password);
		// header("location:../views/signup.php?return=successful");
			
		}
	}
	else
	{
	header("location:../views/signup.php?return=invalidinput");
}

}


















