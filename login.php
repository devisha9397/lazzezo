<?php 
SESSION_START();
?>
<!DOCTYPE html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/login.js"></script>
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />	
<link href='http://fonts.googleapis.com/css1?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>
   <?php 
if(isset($_POST["btnlogin"]))
{
    $email=$_POST["txteid"];
    $pwd=$_POST["txtpwd"];
      include 'database.php';
	  $obj=new database();
	  $res=$obj->login($email,$pwd);
	  $cnt=mysql_num_rows($res);
        if($cnt==1)
      {
        while($row=mysql_fetch_array($res,MYSQL_ASSOC))
        {
          $type=$row["type"];
        }
        if($type==2)
        {
          $_SESSION["email"]=$email;
	//echo "email is".$email;
       Header('Location:index1.php');
        }
        else if($type==0)
        {
          //Header('Location:index1.php');
        }
        else if($type==1)
        {
        echo  "something went wrong";
        }
		else
		{
			echo "You are restaurant owner";
			
		}
		
      }
      else
      {
        echo"wrong";
      }

  }
?>
<body>


<form method="post" action="login.php">

<?php
include('head.php');
?>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" name="txteid" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="txtpwd" class="form-control" placeholder="Password" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-danger btn-block btn-signin"  name="btnlogin" type="submit">GO!!</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a><br>

					<label>Haven't signup yet?? </label><a href="signup.php"><!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary">Signup</span>
  </button>
  
</div>
		</a>
        </div><!-- /card-container -->

    </div>
	<?php
		include('footer.php');
	?>
	
	<!-- /container -->
	</form>
	</body>
	</html>
	