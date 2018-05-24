<?php
SESSION_START();

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from p.w3layouts.com/demos/21-03-2016/cookery/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2017 08:10:30 GMT -->
<head>
<title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6S9Zli4v_L0pYZbOpDuk1k6fFX0JMqTA&callback=initMap""></script>


<link href="css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
<script src='../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>

<body>

<?php

//$rest_image=$_FILES["txtrestimage"]["name"];

			//$rest_image1="images/".$_FILES["txtrestimage"]["name"];
			//$rest_image1=$_FILES["txtrestimage"]["name"];
			//move_uploaded_file($_FILES["txtrestimage"]["tmp_name"],$rest_image1);

?>
<?php

include('head.php');
?>
<form  method="post" action="contact.php" enctype="multipart/form-data">
<!--content-->
<!---728x90--->
	<div class="contact">
		<div class="container">
		<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Feedback</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!---728x90--->
			<div class="contact-top">
			<div class="col-md-5 contact-map">
			<h5>Google Map</h5>
			<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div ><img src='../images/map.png' style='width: 400px; height: 350px;'></div>
			</div>
			<div class="address">
		<h4>
K.S. School of Business Management,
Gujarat University, Navrangpura, Ahmedabad - 380 009 (Gujarat)

CALL US ON - 079 2630 5972</h4>
					     
					 </div>
			</div>
			<div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h5>Feedback Form</h5>
		
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Name </p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
					<div class="col-md-6 contact-grid">
					<p class="your-para">Phone number</p>	
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para"> User Email</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="col-md-6 contact-grid">
						<p class="your-para">Your Image</p>
						
						<input type="file"  name="txtrestimage" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					</div>
					<div class="clearfix"> </div>
				</div>
				<p class="your-para msg-para">Feedback</p>
				<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					<div class="send">
						<input type="submit" value="Send " >
					</div>
			</form>
			</div>	
			
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!--footer-->
<?php
include('footer.php');

?>		
	<!--//footer-->

</body>

<!-- Mirrored from p.w3layouts.com/demos/21-03-2016/cookery/web/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2017 08:10:30 GMT -->
</html>

