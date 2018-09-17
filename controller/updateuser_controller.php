<?php
include_once '../model/func.php';
session_start();
if(isset($_POST['update']))
{
	$lastname=trim($_POST['lastname']);
	$firstname=trim($_POST['firstname']);
	$mi=trim($_POST['mi']);
	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	
	if($username!="" && $password!="" && $lastname!="" && $firstname!="" && $mi!="")
	{

			$password = base64_encode($password);
			updateUser($_SESSION['Id'],$lastname,$firstname,$mi,$username,$password);
		 header("location:../views/extra.php?return=successful");
			
		
	}
	else
	{
	header("location:../views/extra.php?return=invalidinput");
}

}


















