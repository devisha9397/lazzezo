<?php 
SESSION_START();


include('database.php');

$oldpwd=$_SESSION["oldpwd"];

	$oldpwd=$_POST["txtold"];
	if($oldpwd==$oldpwd)
	{
		$pwd=$_POST["txtnew"];
		$repwd=$_POST["txtcon"];
		$email=$_SESSION["email"];
		
		if($pwd==$repwd)
		{
			
			$obj1=new database();
	$res1=$obj1->updatepwd($email,$pwd);
			
			
			
			if($res1==1)
			{
				
				Header('Location:viewprofile.php');
			}
			else
			{
				echo"something went wrong";
			}
		}
		else{
			echo"wrong password";
		}
	}




?>