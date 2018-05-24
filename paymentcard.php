

<?php
SESSION_START();

$email=$_SESSION["email"];
include('database.php');


?>
<?php
$obj1=new database();
$res6=$obj1->order2($email);
while($row=mysql_fetch_array($res6,MYSQL_ASSOC))
	{
		
		
		$order_id=$row["order_id"];
		$total_amount=$row["total_amount"];
		//echo $order_id;
	
	}
	


	if(isset($_POST['btnpay']))
	{
		$card_number=$_POST["cardnumber"];
		$card_name=$_POST["owner"];
		$cv_code=$_POST["cvv"];
		$month=$_POST["month"];
        $year=$_POST["year"];
		$date=$month."-".$year;

		$obj=new database();

		$res=$obj->paymentadd($card_number,$card_name,$cv_code,$date,$order_id,$email);
		
		if($res==1)
		{
             header("location:restaurantview.php");
			
		}
		else
		{
			
			echo"error";
		}
			
		
		
	}


?>


<html>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/card.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/card.js"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js"></script>
<script>
function addorders()
{
	return confirm('Your order is Successfully placed ') ;
}
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#test4").keyup(function() {
    var val = $("#test4").val();
    if (parseInt(val) < 0 || isNaN(val)) {
        alert("Please Enter Only Numeric Values");
        $("#test4").val("");
        $("#test4").focus();
    }
});
});
</script>
<script type="text/javascript">
$(document).ready(function(){
$("#test5").keyup(function() {
    var val = $("#test5").val();
    if (parseInt(val) < 0 || isNaN(val)) {
        alert("Please Enter Only Numeric Values");
        $("#test5").val("");
        $("#test5").focus();
    }
});
});
</script>
<script type="text/javascript">
        function numberOnly(txt, e) {
            var arr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz ";
            var code;
            if (window.event)
                code = e.keyCode;
            else
                code = e.which;
            var char = keychar = String.fromCharCode(code);
            if (arr.indexOf(char) == -1)
                return false;
            
        }
    </script>
 <script type="text/javascript">
    
    function allLetter(uname)
{
    var letters=/^[A-Za-z]+$/;
    if(uname.value.match(letters))
    {
            return true;
    }
    else
    {
            
            uname.value="";
            uname.focus();
            alert('Owner Name must have Alphabetic characters only');
            return false;
    }
}
function passid_validation(passid,mx,my)
{
    mx=16;
    my=16;
    var pl=passid.value.length;
    if(pl==0 || pl!=my || pl!=mx)
    {
        alert("Card Number should be of 16 digits only ");
        passid.value="";
        passid.focus();
        return false;
    }
    return true;
}

</script>



<form method="post" action="paymentcard.php">
<?php

include('header.php');
?>

<div class="container">
    <div class="row">
        <!-- You can make it whatever width you want. I'm making it full width
             on <= small devices and 4/12 page width on >= medium devices -->
        <div class="col-xs-12 col-md-4 col-md-offset-4">
        
        
            <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="images/accepted.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                         id="test5" name="cardnumber" onblur="return passid_validation(cardnumber);" maxlength="16"
                                            type="text"
                                            class="form-control"
                                           
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
						 <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="couponCode">Name on card</label>
                                    <input type="text" class="form-control" name="owner"onblur="return allLetter(owner);" required />
                                </div>
                            </div>                        
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group" id="expiration-date" >
                        <label>Expiration Date</label>
                        <select  name="month">
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select  name="year">
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="password" 
                                        class="form-control"
                                       name="cvv" maxlength="3" required
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                       id="test4"
                                    />
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" onclick="return addorders()" name="btnpay" type="submit">Pay</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
            
            
        </div>            
        
        
        
    </div>
</div>
</form>
<?php
include('footer.php');
?>

</html>