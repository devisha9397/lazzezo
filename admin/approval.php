<!DOCTYPE html>
<html>
<head>
<title></title>


    <link href="Content/bootstrap.min.css" rel="stylesheet">
    <link href="css/jquery.dataTables_themeroller.css" rel="stylesheet">
    <link href="css/endless.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet"> 
    <script src="js/jquery-1.10.2.min.js"></script>
	<script src="Scripts/bootstrap.min.js"></script>
	<script src='js/jquery.dataTables.min.js'></script>

    
</head>
<body>
<?php 
	include 'header.php';

?>
<div class="container">
<div class="row">
<center>
<center><p style="font-size:50px;color:red;">Approval</p></center>
<form action="" method="post">
<table class="table table-striped"  >
<thead>


<tr>
	<th>Restaurant Id
	<th>Restaurant Name
	<th>Request Date
	<th>Restaurant_owner Email Id
	<th>Action
</tr>
</thead>
<tbody>
<!--<?php 
	
		require '../database.php';
		$obj=new database();
		$res=$obj->getquedis();
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
			echo "<tr>";
			echo "<td><center>".$row["pk_que_id"];
			echo "<td><center>".$row["que_title"];
			echo "<td><center>".$row["que_desc"];
			echo "<td><center>".$row["que_date"];
			echo "<td><center>".$row["fk_email_id"];
			echo '<td><a href="quedel.php?id='.$row["pk_que_id"].'"><span class="glyphicon glyphicon-
" aria-hidden="true"></span></a></td>';		
							
			echo "</tr>";
		}
?>-->
 </tbody>

		

</div>
</div>
</table>
</form>
</center>
</body>
</html>