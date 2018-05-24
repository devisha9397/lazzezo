<?php
if($email=="")
 {
	 header('Location:login.php');	 
 }
session_start();
$email=$_SESSION["email"];
$order_id=$_REQUEST["order_id"];
include ('database.php');
$obj=new database();
	$res=$obj->deleteorder($order_id,$email);
	if($res==1)
	{
		header('location:viewcart.php');
	}		
	else
	{
		echo"Something went wrong";
		
	}
?>