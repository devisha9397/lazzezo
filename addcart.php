<?php
session_start();
$subcui_id=$_REQUEST["subcui_id"];
$email=$_SESSION["email"];
$rest_id=$_SESSION["rest_id"];
echo $rest_id;
include ('database.php');
		$obj=new database();
		$res2=$obj->getcart($subcui_id,$rest_id);
		//$price=$_POST["subcui_price"];
		$quantity=1;
		while($row=mysql_fetch_array($res2,MYSQL_ASSOC))
{
	
	$amt=$row["subcui_price"];
	
	
	


	
}
	
	$date_of_order=date("dd/m/yy");
	$area=NULL;
	$obj1=new database();
	$res1=$obj1->addcart($rest_id,$email,$subcui_id,$quantity,$amt,$date_of_order,$area);
	if($res1==1)
	{
		header('location:order.php?rest_id='.$rest_id);
		
	}
	else
	{
		echo"something went wrong";
		
	}
?>