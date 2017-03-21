<?php
SESSION_START();
$cusines=$_REQUEST['cusines'];

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
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

  </div>
  </div>
<form>
<?php

include('header.php');

?>
<!--content-->
<!---728x90--->
<div class='blog'>
	<div class='container'>
		
				
<?php 

	include('database.php');
	$obj=new database();
		$res=$obj->discat($cusines);
		
		
		echo"<div class='menu-top'>
				<div class='col-md-4 menu-left'>
					<h3>Restuarants</h3>
					<label><i class='glyphicon glyphicon-menu-up'></i></label>
					
				</div>
				
				<div class='clearfix'> </div>
			</div>";
		echo"<div class='col-md-9 blog-header'>
		<div class='blog-head' style='height:400px'>";
	while($row=mysql_fetch_array($res,MYSQL_ASSOC))
	{
			echo"<div class='col-md-4 blog-top'>";
				echo"<div class='blog-in'>";
					echo"<a href='single.html'><img class='img-responsive' style='height:300px;' src=".$row['rest_image']."></a>
";
echo"<center>";

echo"<br><button type='button' class='btn btn-success' aria-label='Right Align'><span class='glyphicon glyphicon-heart' aria-hidden='true'></span>
</button>";
echo"</center>";
					echo"<div class='blog-grid'>";
						echo"<h3><a href='single.html'>".$row['rest_name']."</a></h3>";
						echo"<h4><a href='single.html'>".$row['area']."</a></h4>";
							echo"<div class='clearfix'> </div>";
						
						echo"<h4><a href='single.html'>Cusines: ".$row['cusines']."</a></h4>";
						echo"<h4><a href='single.html'>Hours: ".$row['opening_status']."</a></h4>";
						
						echo"<a href='order.php?rest_id=".$row['rest_id']."'><button type='button' class='btn btn-danger'>Order now</button></a>";
						//echo"</div>";
						//echo"<span class='date-in'><i class='glyphicon glyphicon-book'> </i>book a table</span>";
						//echo"<a href='single.html' class='call'><i class='glyphicon glyphicon-comment'></i>24</a>";
						echo"<div class='more'>";						
						echo"<a class='link link-yaku'  href='individual.php?rest_id=".$row['rest_id']."'>";
						echo"<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>";
						echo"	</a></a>
					</div>	
				</div>
				</div>
			</div>";
		
		
	}
	echo"</div>
	

</div>";
?>


<?php

	
	$obj1=new database();
		$res1=$obj->disrestc();
	
		echo"<div class='col-md-3 categories-grid'>
			<div class='search-in animated wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='500ms'>
				<h4>Search</h4>
					<div class='search'>
					<form>
						<input type='text' placeholder='Search' required='' >
						<input type='submit' value='' >
					</form>
					</div>
			</div>
			<div class='grid-categories animated wow fadeInLeft' data-wow-duration='1000ms' data-wow-delay='500ms'>
			<h4>Categories</h4>";
while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
	{

		
					echo"<ul class='popular'>";
						echo"<li><a href='category.php?cusines=".$row['cusines']."'><i class='glyphicon glyphicon-menu-right'> </i>".$row['cusines']."</a></li>";
						
						
					echo"</ul>";
				
	}
	echo"<div class='jumbotron'>";

 echo" <h1>What to find famous food around your area??</h1><br>";
  echo"<p><a class='btn btn-primary btn-lg' href='#' role='button'>Find famous food!</a></p>";
echo"</div>";
	echo"</div>
	
				</div>
";
?>

</div>
</div>
<!--//content-->
<!--footer-->
	<?php 
	include ('footer.php');

?>	
	<!--//footer-->
</form>
</body>


</html>
