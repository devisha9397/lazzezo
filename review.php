<?php
SESSION_START();
$rest_id=$_REQUEST['rest_id'];
$email=$_SESSION["email"];

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
<form action="review.php?rest_id=<?php echo $rest_id;?>" method="post">	

<?php
include('header.php');
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
		
			echo"<img class='img-responsive wow fadeInUp animated' data-wow-delay='.5s' style='width:900px; height:400px; ' src='../images/".$row['rest_image']."' alt='' />";
			echo"<div class='lone-line'>";
					echo"<h4>".$row['rest_name']."</h4>";
					echo"<nav class='navbar navbar-default navbar-static-top'>
  <div class='container'>
  <h4>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav'>
        <li ><a href='individual.php?rest_id=".$row['rest_id']."'>About<span class='sr-only'>(current)</span></a></li>
        <li ><a href= 'menuphotos.php?rest_id=".$row['rest_id']."'>Menu photos</a></li>
		<li><a href='otherphotos.php?rest_id=".$row['rest_id']."'>Otherphotos</a></li>
		<li class='active'><a href='review.php?rest_id=".$row['rest_id']."'>Reviews</a></li>
</ul>
<div>
    </h4>
  </div>
</nav></div></div>";
		}
	?>	
	
	
	<?php
		$obj2=new database();
		$res2=$obj2->disrev($rest_id);
		
		$email=$_SESSION["email"];
		while($row=mysql_fetch_array($res2,MYSQL_ASSOC))
		{
		echo"<div class='comment'>";
							echo"<h3>Comments</h3>";
							echo" <div class='media wow fadeInLeft animated' data-wow-delay='.5s'>";
								echo"<div class='code-in'>";
									echo"<p class='smith'><a href='#'>".$row['user_name']."</a> <span>".$row['review_date']. "</span></p>";
									
									echo"<div class='clearfix'> </div>";
									echo"</div>";
							    echo"<div class='media-left'>
							        <a href='#'>
							        	<img src='".$row['pro_pic']."' style='width:150px; height:150px;' alt=''>
							        </a>
							     </div>";
							    echo"<div class='media-body'>
		
									<p>".$row['review_message']."</p>
							      </div>
							    </div>
								 </div>";
				
		}
							    						
				
			?>		

<?php
	 
	if(isset($_POST["btninsert"]))
	{
		
		$message=$_POST['area1'];
		
		$date=date('d-m-Y');
		
		if($email==NULL)
		{
			header('Location:login.php');
			
		}
	
		{
		
			$obj3=new database();
		$res3=$obj3->getreviewinsert($email,$rest_id,$message,$date);
		
		if($res3==1)
		{
			header('Location:individual.php?rest_id='.$rest_id.'');
			
		}
		else
		{
			echo 'error';
		}	
			
		}
		
	}
?>	


  
	<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">
	<h2 style="color:blue;">
    Enter your review

  </h2>
  <textarea name="area1" cols="100" rows="10">
</textarea><br/>
  <h4>
 
  		<input type="submit" name="btninsert" value="Add Your Opinion" class="btn btn-info text-center">
	</div>
	

	</div>	
</div>

<?php

	include('side.php');
?>


</div>
</div>
	
<?php 
	include ('footer.php');

?>


		


</form>

</body>
</html>