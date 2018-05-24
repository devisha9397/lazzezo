<?php
if($email=="")
 {
	 header('Location:login.php');	 
 }
session_start();
$email=$_SESSION["email"];
$fav_id=$_REQUEST["fav_id"];
include ('database.php');
$obj=new database();
	$res=$obj->deletefav($fav_id,$email);
	if($res==1)
	{
		header('location:viewfav.php');
	}		
	else
	{
		echo"Something went wrong";
		
	}
?>