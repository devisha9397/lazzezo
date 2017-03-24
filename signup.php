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
<script src="js/signup.js"></script>
<link href="css/signup.css" rel="stylesheet" type="text/css" media="all" />	
<link href='http://fonts.googleapis.com/css1?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
</head>

<?php 
include 'database.php';
	if(isset($_POST["btnsubmit"]))
	{
		$user_name=$_POST["txtuname"];
		$user_email=$_POST["txtemail"];
		$password=$_POST["txtpass"];
		$conf=$_POST["txtconpass"];
		$mobile_no=$_POST["txtmob"];
		$city=$_POST["city"];
		$address=$_POST["address"];
		$dd=$_POST["dd"];
		$mm=$_POST["mm"];
		$yyyy=$_POST["yyyy"];
		$date=$dd."-".$mm."-".$yyyy;
		//$dd."-".$mm."-".$yyyy;
		$pro_pic=$_POST["txtfile"];
		$type=2;
		$gender=$_POST["txtgender"];
		if($_POST["captcha_code"]==$_SESSION["captcha_code"])
		{
			
		if($password==$conf)
		{
				
		$obj=new database();
		$res=$obj->signup($user_email,$user_name,$password,$address,$mobile_no,$gender,$city,$pro_pic,$date,$type);
		echo $res;
			if($res==1)
			{
				Header('Location:index1.php');
			}

		
			else
			{
				echo"SOMETHING WENT WRONG";
			}
		}
	
		else
		{
			echo"your password does'nt match confirm password";
		}
}
		else
		{
			echo"code doesn't match";
		}
}
?>

<body>
<form method="post" action="signup.php">
<?php
include('head.php');
?><!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
			
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
			<input type="file"  id="inputfile" name="txtfile"/><br>
            <form class="form-signin">
			
                <span id="reauth-email" class="reauth-email"></span>
				<input type="text" id="inputname" class="form-control" name="txtuname" placeholder="Enter name" required autofocus><br>
                <input type="email" id="inputEmail" class="form-control" name="txtemail" placeholder="Email address" required><br>
               <input type="password" id="inputPassword" name="txtpass" class="form-control" placeholder="Password" required><br>
			   
				<input type="password" id="inputconPassword" name="txtconpass" class="form-control" placeholder="Confirm password" required><br>
				<input type="number" id="inputmobile" name="txtmob" class="form-control" placeholder="Mobile number" required><br>
			<br>
			
			<div class="form-group">
			
			 <textarea id="inputtextarea" name="address" class="form-control" cols="100" placeholder="Address">
</textarea>
</div>
			<div class="form-group">
			<label class="control-label col-sm-3">City </label>
			<select name="city" class="form-control">
<option value="abad">abad</option>
<option checked value="baroda">baroda</option>
<option value="surat">surat</option>
</select>
</div>
			<div class="form-group">
          <label class="control-label col-sm-3">Date of Birth </label>
          <div class="col-xs-8">
            <div class="form-inline">
              <div class="form-group">
                <select name="dd" class="form-control">
                  <option value="">Date</option>
                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
              </div>
              <div class="form-group">
                <select name="mm" class="form-control">
                  <option value="">Month</option>
                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
              </div>
              <div class="form-group" >
                <select name="yyyy" class="form-control">
                  <option value="0">Year</option>
                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
              </div>
            </div>
          </div>
		  
        </div>
		<br>
		<br>
			<label class="control-label col-sm-3">Gender</label>
          <div class="col-md-8 col-sm-9">
            <label>
            <input name="txtgender" type="radio" value="Male" checked>
            Male </label>
            <label>x
            <input name="txtgender" type="radio" value="Female" >
            Female </label>
          </div>
		  <br>
		  <br>
                <div class="field-wrap"><img src="captcha.php" style="font-size:100px" >
				<br>
				
				<br>
		<input type="text" id="inputcaptcha" name="captcha_code" class="form-control" placeholder="Enter captcha code" required>
		<br>

		</div>
                <button class="btn btn-lg btn-danger btn-block btn-signin" type="submit" name="btnsubmit">Sign in</button>
            </form><!-- /form -->
            
        </div><!-- /card-container -->
    </div>
	
	<?php
		include('footer.php');
	?>
	<!-- /container -->
	</form>
	</body>
	</html>