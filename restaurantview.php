<!DOCTYPE html>
<?php

SESSION_START();

?>

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
<script>
function myFunction() {
    document.getElementById("fav").style.color = "red";
}
</script>

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

$noi=100;
$page = 1;
 if($page=="" || $page=="1")
{
	$page1=0;
}
else
{
	$page1=($page*$noi)-$noi;
}

$next_page=$page+1;
$prev_page=$page-1;
$first_page=1;




	include('database.php');
	$obj=new database();
		$res11=$obj->restview($page1,$noi);
		
		
		echo"<div class='menu-top'>
				<div class='col-md-4 menu-left'>
					<h3>Restaurants</h3>
					<label><i class='glyphicon glyphicon-menu-up'></i></label>
					
				</div>
				
				<div class='clearfix'> </div>
			</div>";
		echo"<div class='col-md-9 blog-header'>
		<div class='blog-head' style='height:400px'>";
	while($row=mysql_fetch_array($res11,MYSQL_ASSOC))
	{
			echo"<div class='col-md-4 blog-top'>";
				echo"<div class='blog-in'>";
					echo"<a href='individual.php?rest_id=".$row['rest_id']."'><img class='img-responsive' style='height:300px;' src='../images/".$row['rest_image']."'></a>";
echo"<center>";

echo"<br><a href='addfav.php?rest_id=".$row['rest_id']."'><button type='button' id='fav' onclick='myFunction()' class='btn btn-success' aria-label='Right Align'><span class='glyphicon glyphicon-heart' aria-hidden='true'></span>
</button></a>";
echo"</center>";
					echo"<div class='blog-grid'>";
						echo"<h3><a href=''>".$row['rest_name']."</a></h3>";
						echo"<h4><a href=''>".$row['area']."</a></h4>";
							echo"<div class='clearfix'> </div>";
						
						echo"<h4><a href=''>Cusines: ".$row['cusines']."</a></h4>";
						echo"<h4><a href=''>Hours: ".$row['opening_status']."</a></h4>";
						
					
						
						echo"<a href='order1.php?rest_id=".$row['rest_id']."'><button type='button' name='btnorder' class='btn btn-danger'>Order now</button></a>";
					
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
  		$res10=$obj->disrestc();
  $cnt=mysql_num_rows($res10);	
		//echo $cnt.'<br>';
		
		$a=$cnt/$noi;
		
		$a=ceil($a);
		$last_page=$a;
  


	echo"</div>
	

</div>";

?>

<?php
include('side.php');
?>


</div>
</div>
<?php 

echo '<br><center>';
			if($page==1)
			{
			
			}
			else 
			{	
			echo '<a href="restaurantview.php?page='.$first_page.'" style="text-decoration:none;"><button class="button"><<</button></a>';	
			}
			if($prev_page==0)
			{
				
			}
			else
			{
		echo '<a href="restaurantview.php?page='.$prev_page.'" style="text-decoration:none;"><button class="button">Previous</button></a>';	
			}
			
			for($b=1;$b<=$a;$b++)
		{
			echo '<a href="restaurantview.php?page='.$b.'" style="text-decoration:none;"><button class="button">'.$b.'</button></a>'; 
		}
		
		if($next_page==$a)
		{
			echo '<a href="restaurantview.php?page='.$next_page.'" style="text-decoration:none;"><button class="button">Next</button></a>';	
		}
		else
		{	
		
		}
		if($page==$last_page)
		{
			
		}
		else if($a==0)
		{
			
		}
		else 
		{	
		echo '<a href="discount.php?page='.$last_page.'" style="text-decoration:none;"><button class="button">>></button></a>';
		}
		echo '</center>';
			 ?>

<br><br>
	<?php 
	include ('footer.php');

?>
</form>

</body>


</html>
