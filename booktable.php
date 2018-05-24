
<?php
SESSION_START();
$rest_id=$_REQUEST['rest_id'];
$email=$_SESSION["email"];
if($email=="")
 {
	 header('Location:login.php');	 
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title><script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/book.css" rel="stylesheet" type="text/css" media="all" />
	<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body onload="displayDate()">
<form method="post" action="#">
<?php
	include ('header.php');
?>


<?php
include('database.php');
$date=date('d-m-Y');
if(isset($_POST['btnsubmit']))
{
$date=date('d-m-Y');
$people=$_POST['txtmember'];
$time=$_POST['txttime'];
$request=$_POST['txtrequest'];
$obj=new database();
   $res=$obj->book1($email,$rest_id,$date,$people,$time,$request);
			if($res==1)
			{
				header('location:restaurantview.php');
				
			}
			else
			{
				echo"error";
				
			}
}
		
?>

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="row">
<div class="col-md-8 col-md-offset-2">
    
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Bookatable.com</h4>
          </div>
          <div class="modal-body">
              <div class="row">
              <div class="col-md-6 col-md-offset-4">
                      <p class="lead">How it works.. <span class="text-success">FREE</span></p>
                      <ul class="list-unstyled" style="line-height: 2">
                          <li><span class="fa fa-check text-success"></span>Follow 2 simple steps for booking the table</li>
                          <li><span class="fa fa-check text-success"></span> We will contact the restaurant on you  behalf to book a table and get back to you shortly via email</li>
                         
                      </ul>
                     
                  </div>

                  </br>
                  </br>
				  
                  <div class="col-md-12">
				 
				  
				  
				  <h4>STEP1:-</h4>
             <div class="well">
				<div class="row" > 
					<div class="form-group">
						<div class="col-md-4">
				
			<br>
							Enter date: <input type="date" class="form-control" value="<?php echo $date; ?>" name="txtdate" readonly />
						
						</div>
					</div>
					<div class="form-group"> 
							<div class="col-md-4 col-md-offset">
								Enter No. Of Members<select name="txtmember" value="Quantity:" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option  value="3">3</option>
								<option  value="4">4</option>
								<option  value="5">5</option>
								<option  value="6">6</option>
								<option  value="7">7</option>
								<option  value="8">8</option>
								<option  value="9">9</option>
								<option  value="10">10</option>
								</select>
							</div>
				</div>
				<div class="form-group"> 
							<div class="col-md-4 col-md-offset">
								Time:<select name="txttime"  class="form-control">
								<option value="12:00">12:00</option>
								<option value="12:30">12:30</option>
								<option  value="1:00">1:00</option>
								<option  value="1:30">1:30</option>
								<option  value="2:00">2:00</option>
								<option  value="2:30">2:30</option>
								<option  value="3:00">3:00</option>
								<option  value="3:30">3:30</option>
								<option  value="4:00">4:00</option>
								<option  value="4:30">4:30</option>
								<option  value="5:00">5:00</option>
								<option  value="5:30">5:30</option>
								<option  value="6:00">6:00</option>
								<option  value="6:30">6:30</option>
								<option  value="7:00">7:00</option>
								<option  value="7:30">7:30</option>
								<option  value="8:00">8:00</option>
								<option  value="8:30">8:30</option>
								<option  value="9:00">9:00</option>
								<option  value="9:30">9:30</option>
								<option  value="10:00">10:00</option>
								<option  value="10:30">10:30</option>
								<option  value="11:00">11:00</option>
								<option  value="11:30">11:30</option>
								<option  value="12:00 am">12:00 am</option>
								
								</select>
				
				
				

			    </div>
				
				
				
				</div>
				</div>
                      </div>
					   <h4>STEP2:-</h4>
					  <div class="well">
					  <div class="form-group">
      <label for="comment">Additional Request</label>
      <textarea class="form-control" name="txtrequest" rows="5" ></textarea>
    </div>
					  </div>
					   </div>
					   </div>
	<button type="submit" class="btn btn-primary"  name="btnsubmit" >Send booking request</button>				  
		<div class="container">
	
    
    <div class="row">
        <!-- Large modal -->


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
      <div class="modal-view">
     
      <H2>Your request is sent!</H2>
      <h4>We will inform you soon by email.</h4>
     
      </div>
    </div>
  </div>
</div>
    </div>
    
    
</div>
                
                  
              
          </div>
		  
      </div>


</div>
</div>



<br>
<br>
<?php
	include('footer.php');
?>
</form>
</body>
</html>