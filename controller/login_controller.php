<?php
session_start();
include_once '../model/func.php';

if(isset($_POST['login']))
{

	$username=trim($_POST['username']);
	$password=trim($_POST['password']);
	
	if($username!="" && $password!="")
	{

		$compare=compare($username,$password);

		if(count($compare) > 0)
		{

			foreach($compare as $com)
			{
				$_SESSION['Username'] = $com['owner_username'];
				$_SESSION['Password']=$com['owner_password'];
				$_SESSION['Lastname']=$com['owner_lastname'];
				$_SESSION['Firstname']=$com['owner_firstname'];
				$_SESSION['Mi']=$com['owner_mi'];
				$_SESSION['Id']=$com['owner_id'];

				
		    }
			header("location:../views/index.php");

		/*	$_SESSION['Username'];
			$_SESSION['Password'];
			$_SESSION['Lastname']=com;
			header("location:../views/index.php");*/

		}
		else
		{
			header("location:../views/login.php?return=invalid");
		}


	}
	else
	{
	header("location:../views/login.php?return=invalidinput");
}

}


















