<?php
session_start();
include 'database.php';

$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }
?>
<!DOCTYPE html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/signup.js"></script>
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />	
<link href='http://fonts.googleapis.com/css1?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>

<?php 

	$flag=2;
$obj1=new database();
	$res=$obj1->userview($email,$flag);
while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
	
		
		$pro_pic=$row["pro_pic"];
		$user_email=$row["user_email"];
		$user_name=$row["user_name"];
		$add=$row["address"];
		$mobile=$row["mobile_no"];
		$gender=$row["gender"];
		$city=$row["city"];
	
	}
?>

<body>


<?php
include('head.php');
?><!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
			<form class="form-signin" action="details.php?photo=<?php echo $pro_pic; ?>" method="post" enctype="multipart/form-data">
            <img id="profile-img" class="profile-img-card" src="../images/<?php echo $pro_pic; ?>" />
            <p id="profile-name" class="profile-name-card"></p>
			<input type="file"  id="inputfile" name="txtfile"/><br>
            
			
                <span id="reauth-email" class="reauth-email"></span>
				<input type="text" id="inputname" value="<?php echo $user_name; ?>" class="form-control" name="txtuname"  required autofocus><br>
                <input type="email" id="inputEmail" class="form-control" value="<?php echo $user_email; ?>" name="txtemail" required><br>
              
			   
				
				<input type="text" id="inputmobile" value="<?php echo $mobile; ?> "
				name="txtmob" class="form-control"  required><br>
			<br>
			
			<div class="form-group">
			
			 <input type="text" id="inputtextarea" name="address" value="<?php echo $add; ?>" class="form-control" cols="100" />

</div>
			<div class="form-group">
			<label class="control-label col-sm-3">City </label>
			<select name="city"  class="form-control">
<option value="abad" <?php if($city=="abad") echo "selected"; ?>>abad</option>
<option value="baroda" <?php if($city=="baroda") echo "selected"; ?> >baroda</option>
<option value="surat" <?php if($city=="surat") echo "selected"; ?>>surat</option>
</select>
</div>
			
		<br>
		<br>
			<label class="control-label col-sm-3">Gender</label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="txtgender" value="Male" type="radio" <?php if($gender=="Male") echo "checked"; ?>>
            Male </label>
            <label>
            <input name="txtgender"  type="radio" value="Female" <?php if($gender=="Female") echo "checked"; ?> >
            Female </label>
          </div>
		  <br>
		  <br>
                <button class="btn btn-lg btn-danger btn-block btn-signin" type="submit" name="btnsubmit">update</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div>
	
	<?php
		include('footer.php');
	?>
	<!-- /container -->

	</body>
	</html>