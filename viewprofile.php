<?php
session_start();

$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }

?>
<html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
</head>
<body>
<form>
<?php
	include('header.php');
	
?>

<div class="container">
    <div class="row">
	<?php
	include('database.php');
			
		$obj=new database();
		$res=$obj->viewuser($email);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
        echo'<div class="col-sm-2 col-md-3">
            <img src="../images/'.$row["pro_pic"].'"
            alt="" style="height:350px; width:380px;" class="img-rounded img-responsive" />
        </div>
        <div class="col-sm-4 col-md-8">
            <blockquote>
              <h3>  <p>'.$row["user_name"].'</p> <cite title="Source Title">'.$row["address"].'<i class="glyphicon glyphicon-map-marker"></i></cite></h3>
				
            </blockquote>
          <h4>  <p> <i class="glyphicon glyphicon-envelope"></i>    '.$row["user_email"].'
                <br><br> <i class="glyphicon glyphicon-earphone"></i>   '.$row["mobile_no"].'
                <br ><br> <i class="glyphicon glyphicon-gift"></i>   '.$row["DOB"].'</p></h4>
        </div>';
	}
		?>
		
        </div>
</div>

<br><br>

<?php
	include('footer.php');
	
?>
</form>
</body>
</html>