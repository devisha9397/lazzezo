<?php
SESSION_START();
$rest_id=$_REQUEST['rest_id'];
$_SESSION['rest_id']=$rest_id;

?>
<?php
	include('database.php');
	if(isset($_POST["btnadd"]))
	{
		$email=$_SESSION["email"];
		
		$subcui_id=$_POST["btnadd"];
		$quantity=$_POST["txtquantity"];
	
		
		$obj6=new database();
		$res6=$obj6->getcart($subcui_id);
		
		while($row=mysql_fetch_array($res6,MYSQL_ASSOC))
		{
	
		$price=$row["subcui_price"];
	
	
		
		}		

$total_amount=$price*$quantity;
	echo $total_amount;
		
		//$price=$_POST["subcui_price"];
	
	
	
	
	date_default_timezone_set("Asia/Kolkata");
	$date_of_order=date("d-m-Y h:i:s");
	$area=NULL;
	$obj5=new database();
	$res5=$obj5->addcart($rest_id,$email,$subcui_id,$quantity,$total_amount,$date_of_order,$area);
	if($res5==1)
	{
		header('location:order.php?rest_id='.$rest_id);
		
	}
	else
	{
		echo"something went wrong";
		
	}
	}



 ?>
<!DOCTYPE HTML>
<html>

<!-- Mirrored from p.w3layouts.com/demos/spice_mystery/web/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2017 08:13:55 GMT -->
<head>
<title>Spice_Mystery a Hotel and Restaurant Category Flat Bootstrap Responsive Website Template | Orders :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Spice_Mystery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Libre+Baskerville:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/flexslider.html" type="text/css" media="screen" />
<script src="js/simpleCart.min.js"> </script>		
</head>
<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<script async type='text/javascript' src='../../../../cdn.fancybar.net/ac/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>

<form method="post" action="order.php?rest_id=<?php echo $rest_id; ?>">
<!-- header -->
	<?php
	
	
	include ('header.php');
	
?>


					
					
<div class="blog">
<div class="container">
<div class='col-md-9'>
<div class='single'>
<?php

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
	<table class="table table-hover" >
		<?php

$obj1=new database();
	
		$res1=$obj1->getorders($rest_id);
		while($row=mysql_fetch_array($res1,MYSQL_ASSOC))
		{
			$subcui_id=$row["subcui_id"];
			
		
			
			echo'<tr>
	<td>		
<div class="font1">
   '.$row['cui_name'].'
  </div>
</td></tr>
			
				<tr>
				<td><h4>'.$row["subcui_name"].'</h4></td>
				
				<td>
				<div class="special-info grid_1 simpleCart_shelfItem">
						<div class="pr-left">
							<div class="item_add"><span class="item_price"><h4>'.$row["subcui_price"].'</h4></span></div>
						</div>
						
							
					</div>
					</td>
					<td>Quantity:  <select name="txtquantity">
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
</td>
					<td>
					<!-- Single button -->
<div class="btn-group">
  <button type="submit" name="btnadd" value="'.$row["subcui_id"].'" class="btn btn-success">ADD
      </button>

</div>
					
					</td>
				</tr>';
			
			
			
		}


		
?>

</table>
	</div>	
</div>

<?php

	
	$obj2=new database();
		$res2=$obj2->discat1();
		
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
	
	echo"<div class='jumbotron'>";

 echo" <h1>What to find famous food around your area??</h1><br>";
  echo"<p><a class='btn btn-primary btn-lg' href='#' role='button'>Find famous food!</a></p>";
echo"</div>";
	echo"</div>
	</div>
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