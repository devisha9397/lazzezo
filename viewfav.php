<?php
	SESSION_START();
	$email=$_SESSION["email"];
	if($email=="")
 {
	 header('Location:login.php');	 
 }
	?>


<!DOCTYPE html>
<html>


<head>

<title>view cart</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>


<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
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
<script async type='text/javascript' src='../../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>
<body>


<?php
include('header.php');

?>

<!--content-->
<!---728x90--->
<div class="content">
	<div class="events">
		<div class="container">
			<div class="events-top">
				<div class="col-md-4 events-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Your Favourite Restaurants</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					
				</div>
				
				<div class="clearfix"> </div>
			</div>

			<div class="events-bottom">
				<?php
				$data=1;
		
		include('database.php');
			
	$obj=new database();
	
		$res=$obj->getfav($email);
		
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
			
			
				echo'
				<div class="col-md-11 events-bottom2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="col-md-3">
					
					<img class="img-responsive" style="height:150px;" src="../images/'.$row["rest_image"].'">
					</div>
					<h3>'.$row["rest_name"].'</h3>
					
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<h4>'.$row["rest_add"].'</h4>
				
						
				<div class="col-md-9 col-md-offset-11">		
						<!-- Single button -->
<div class="btn-group">
  <a href="favdelete.php?fav_id='.$row["fav_id"].'"><button type="button"name="btndelete"  class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
   
  </button></a>
  </div>
 </div>

						
						
					
				</div>
				<div class="clearfix"> </div>
				<br>
				<br>';
			
			
			
				
		}
				?>
				
				



			<!---728x90--->
			
		</div>
	</div>
</div>

<!--footer-->
	<?php

	include('footer.php');
?>	
	<!--//footer-->



</body>

<!-- Mirrored from p.w3layouts.com/demos/21-03-2016/cookery/web/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2017 08:10:30 GMT -->
</html>