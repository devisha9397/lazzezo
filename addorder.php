<?php
if($email=="")
 {
	 header('Location:login.php');	 
 }
$obj1=new database();
$res6=$obj1->order($email);

while($row=mysql_fetch_array($res6,MYSQL_ASSOC))
	{
		
		$fk_rest_id=$row["fk_rest_id"];
		echo $fk_rest_id;
		$total_amount=$row["total_amount"];
		echo $total_amount;
	}
	


	if(isset($_POST['btnorder']))
	{
		$area=$_POST["txtarea"];
	
		
		$flag=0;
		$obj=new database();

		$res4=$obj->addorders1($flag,$area,$email,$fk_rest_id,$total_amount);
		if($res4=1)
		{
			echo"add";
			
		}
		else
		{
			echo $area;
			
		}
			
		
		
	}


?>
