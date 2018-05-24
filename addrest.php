<?php
SESSION_START();

?>

<!DOCTYPE html>
<html>
<head>

<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
<link href="css/registration.css" rel="stylesheet" type="text/css" media="all" />
</head>
<title>ADD Restaurant
</title>
<body>

<?php
include('head.php');

?>


<?php
if(isset($_POST['txtsubmit']))

{
		
$rest_image=$_FILES["txtrestimage"]["name"];
$rest_id="NULL";
$owner_email=$_POST['txtowneremail'];
$fk_cat_id=$_POST['txtfkcatid'];
$rest_name=$_POST['txtrestname'];
$area=$_POST['txtarea'];
$address=$_POST["location"];
$address1=$_POST["location"];
$pincode=$_POST['txtpincode'];
$rest_number=$_POST['txtrestnumber'];
$rest_email=$_POST['txtrestemail'];
$opening_status=$_POST['txtopeningstatus'];
//$rest_image=$_POST['txtrestimage'];
$cost=$_POST['txtcost'];
$highlights=$_POST['txthighlights'];


	
			$rest_image1="../images/".$_FILES["txtrestimage"]["name"];
			//$rest_image1=$_FILES["txtrestimage"]["name"];
			move_uploaded_file($_FILES["txtrestimage"]["tmp_name"],$rest_image1);
	
	

$region='india';


	$address = str_replace(" ", "+", $address);

    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=$region");
    $json = json_decode($json);
	$lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    echo "</br>";
   // echo $lat;
    //echo "</br>";
	//echo $long;

$con=mysql_connect('localhost','root','');
		 mysql_select_db('lazeezo',$con);
		$res=mysql_query("insert into restaurant_tbl values('$rest_id','$owner_email','$fk_cat_id','$rest_name','$area','$address1','$pincode','$rest_number','$rest_email','$opening_status','0','$rest_image','$cost','$highlights','$long','$lat')");
		if($res==1)
		{
			$msg="Your add restaurant request is send..You will shortly informed via Email";
       	 echo "<script type='text/javascript'> alert('$msg'); </script>";
		}
		else
		{
			echo '<h3>error</h3>';
		}
}
?>



<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-9 col-md-9 col-sm-offset-2 col-md-offset-2">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Want to Add Restaurant <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="addrest.php" enctype="multipart/form-data">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="email" name="txtowneremail" id="owneremail" class="form-control input-sm" placeholder="Enter Your Email" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
												
			    						<input type="text" name="txtrestname" id="rest_name" class="form-control input-sm" placeholder="Enter Restaurant Name"  required>
			    					</div>
			    				</div>
			    			</div>

			

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="txtarea" id="area" class="form-control input-sm" placeholder="Enter Area" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="location"  class="form-control input-sm" placeholder="Enter Restaurant Address" required>
			    					</div>
			    				</div>
			    			</div>
							
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="number" name="txtpincode"  class="form-control input-sm" placeholder="Enter Pincode"  required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="number" maxlength="11" name="txtrestnumber"  class="form-control input-sm" placeholder="Enter Restaurant Contact no."  required>
			    					</div>
			    				</div>
			    			</div>
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="txtrestemail"  class="form-control input-sm" placeholder="Enter Restaurant Email id" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="txtopeningstatus"  class="form-control input-sm" placeholder="Enter Opening Status"  required>
			    					</div>
			    				</div>
			    			</div>
							
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
									Restaurant Image:
			    						<input type="file" name="txtrestimage"   >
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="number" name="txtcost"  class="form-control input-sm" placeholder="Cost for two">
			    					</div>
			    				</div>
			    			</div>
							
							<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="txthighlights"  class="form-control input-sm" placeholder="Enter Highlights"  required>
			    					</div>
									</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
										<select class="form-control" name="txtfkcatid">
  <?php 
  include('database.php');
  $obj=new database();
  $res=$obj->discat1();
  while($row=mysql_fetch_array($res,MYSQL_ASSOC))
  {
	  echo '<option value="'.$row["cat_id"].'">'.$row["cusines"].'</option>';
	  echo'.$row["cat_id"].';
  }
?>
	  </select>
			    					</div>
			    				
									</div>
			    				</div>
			    			
							<input type="submit" value="Register" name="txtsubmit" class="btn btn-info btn-block">
			    		
			    		
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>




<br><br>
<br>



</form>
<?php
include('footer.php');

?>

</html>