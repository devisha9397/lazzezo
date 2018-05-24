<?php
session_start();

$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }

	
?>
   <?php 


		$pro_pic=$_REQUEST["photo"];
		echo $pro_pic;
		$dd=$_POST["dd"];
		$mm=$_POST["mm"];
		$yyyy=$_POST["yyyy"];
		$DOB=$dd."-".$mm."-".$yyyy;
		//$pro_pic=$_POST["txtfile"];
		$user_email=$_POST["txtemail"];
		$user_name=$_POST["txtuname"];
		$add=$_POST["address"];
		$mobile=$_POST["txtmob"];
		$gender=$_POST["txtgender"];
		$city=$_POST["city"];		
	//	$rest_image_new=$_POST["txtrestimage"];	

	if($_FILES["txtfile"]["name"]!="")
		{
			unlink("../images/".$pro_pic);
			$pro_pic="../images/".$_FILES["txtfile"]["name"];
			$pro_pic1=$_FILES["txtfile"]["name"];
			move_uploaded_file($_FILES["txtfile"]["tmp_name"],$pro_pic);
		}
	else if($_FILES["txtfile"]["name"]=="")
	{
			$pro_pic1=$pro_pic;
			move_uploaded_file("../images/".$pro_pic,"images/".$pro_pic);
	}	
			echo $_FILES["txtfile"]["tmp_name"];
		require 'database.php';
		$obj=new database();
		$res=$obj->editprofile($email,$user_name,$add,$mobile,$gender,$city,$pro_pic1,$DOB);
		if($res==1)
		{
	
			header('location:viewprofile.php');
		}			
		else
		{
			echo"not updated your detials plz try again";
				
		}	
		


?>
