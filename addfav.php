<?php
session_start();
$rest_id=$_REQUEST["rest_id"];
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }
//echo $rest_id;
include ('database.php');
$obj2=new database();
	$res2=$obj2->favadd($email,$rest_id);
	if($res2==1)
	{
		
	}
	
else
{	$obj1=new database();
	$res1=$obj1->addfav($rest_id,$email);
	if($res1==1)
	{
		header('location:individual.php?rest_id='.$rest_id);
		
	}
	else
	{
		echo"something went wrong";
		
	}
}
?>