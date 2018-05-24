<?php 
SESSION_START();
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }
?>

<html>
<head>

<link href="css/pass.css" rel="stylesheet" type="text/css" media="all" />
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
<script src="js/pass.js"></script>
</head>
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
<body>
<form action="editpwd.php" method="post">
<?php

include('header.php');
?>
<section id="login">
    <div class="container">
    	<div class="row">
    	    <div class="col-xs-12">
        	    <div class="form-wrap">
                <h1>Change Password</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="key" class="sr-only">Old</label>
                            <input type="password"  name="txtold" id="key" class="form-control" placeholder="Enter old password"  required>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">New</label>
                            <input type="password"  name="txtnew" id="key" class="form-control" placeholder="Enter new password" minlength="8" required>
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Re-Enter</label>
                            <input type="password" name="txtcon" id="key" class="form-control" placeholder="Enter confirm password">
                        </div>
                        <input type="submit" id="btn-login" name="btndone" class="btn btn-custom btn-lg btn-block" value="Change Now">
                    </form>
        
                    <hr>
        	    </div>
    		</div> <!-- /.col-xs-12 -->
    	</div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">×</span>
					<span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title">Recovery password</h4>
			</div>
			<div class="modal-body">
				<p>Type your email account</p>
				<input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-custom">Recovery</button>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
</form>
</body>
</html>