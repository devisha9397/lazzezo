<?php 
SESSION_START();
$email=$_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
<title> CHANGE PASSWORD
</title>
</head>
<?php

include('header.php');
?>
<?php 
include('database.php');
	
	//echo $email;
	$obj1=new database();
	$res1=$obj1->viewprofile($email);
	
	while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
	
	{
		$oldpwd=$row['password'];
		$_SESSION["oldpwd"]=$oldpwd;
	}


?>
<form action="editpwd.php" method="post">
<center>
<table> 
<caption><h1>change password</h1>
</caption>
<tr>
<td>OLD PASSWORD: <input type="password" name="txtold" placeholder="enter old password" required/>
</tr>
<tr>
<td>NEW PASSWORD: <input type="password" name="txtnew" placeholder="enter new password" required/>
</tr>
<tr>
<td>CON-PASSWORD: <input type="password" name="txtcon" placeholder="enter confirm password" required/>
</tr>
<tr>
<br>
<br>
<br>
<br>
<br>
<td></td>
<td></td>
<td></td>
<td></td>
<tr>
<td><input type="submit" name="btndone" value="DONE">
</tr>



</table>
</center>
</form>
</html>