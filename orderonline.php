<?php
SESSION_START();
$rest_id=$_REQUEST['rest_id'];
?>
<!DOCTYPE html>
<html>
<head>
<title>individual</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<script src='../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<script async type='text/javascript' src='../../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>

<script type="text/javascript" src="texteditor.js"></script>
	 <script type="text/javascript">

	 //<![CDATA[

        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>

</head>
<body>
<form action="menuphotos.php?rest_id=<?php echo $rest_id;?>" method="post">	

<?php
include('headerbefore.php');
?>

<div class="blog">
<div class="container">
<div class='col-md-9'>
<div class='single'>
<?php
	include('database.php');
	$obj=new database();
	
		$res=$obj->disind($rest_id);
		while($row=mysql_fetch_array($res,MYSQL_ASSOC))
		{
		echo"<div class='single-top'>";
		
			echo"<img class='img-responsive wow fadeInUp animated' data-wow-delay='.5s' style='width:900px; height:400px; ' src=".$row['rest_image']." alt='' />";
			echo"<div class='lone-line'>";
					echo"<h4>".$row['rest_name']."</h4>";
					echo"<nav class='navbar navbar-default navbar-static-top'>
  <div class='container'>
  <h4>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      Menu
<div>
    </h4>
  </div>
</nav></div></div>";
		}
	?>	
	<table class="table table-hover">
		<th> Item Name</th>
	<th> Price</th>
	<th>Order</th>
<?php


	
$obj1=new database();
	
		$res1=$obj1->getorders($rest_id);
		while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
		{
			echo'
				<tr>
				<td><h4>'.$row["item_name"].'</h4></td>
				<td>'.$row["item_price"].'</td>
				<td><div class="btn-group" role="group" aria-label="...">
				 <div class="btn-group" role="group">
    <button type="button" class="btn btn-danger">Add</button>
	
  </div>
</div>
				</td>
				</tr>
				
';
			
			
			
		}


?>
</table>
	</div>	
</div>

<?php

	
	$obj2=new database();
		$res2=$obj2->disrestc();
		
		echo"<div class='col-md-3 categories-grid'>
			<div class='search-in animated wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='500ms'>
				<h4>Search</h4>
					<div class='search'>
					<form>
						<input type='text' placeholder='Search'  >
						<input type='submit' value='' >
					</form>
					</div>
			</div>
			<div class='grid-categories animated wow fadeInLeft' data-wow-duration='1000ms' data-wow-delay='500ms'>
			<h4>Categories</h4>";
while($row=mysql_fetch_array($res2,MYSQL_ASSOC))
	{

		
					echo"<ul class='popular'>";
						echo"<li><a href='#'><i class='glyphicon glyphicon-menu-right'> </i>".$row['cusines']."</a></li>";
						
						
					echo"</ul>";
				
	}
	echo"<div class='header-right1'>
						<div class='cart box_1'>
							<a href='checkout.html'>
								<h3> <span class='simpleCart_total'>$0.00</span> (<span id='simpleCart_quantity' class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
							</a>	
							<p><a href='javascript:;' class='simpleCart_empty'>empty card</a></p>
							<div class='clearfix'> </div>
						</div>
					</div>";
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
	
<?php 
	include ('footer.php');

?>


		


</form>

</body>
</html>