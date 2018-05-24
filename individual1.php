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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6S9Zli4v_L0pYZbOpDuk1k6fFX0JMqTA&callback=initMap""></script>

<script type="text/javascript">
    function initialize() {
       <?php

       	//$pro_id=$_REQUEST["pro_id"];
          $con=mysql_connect('localhost','root','');
          mysql_select_db('lazeezo',$con);
          
          $res=mysql_query("select * from restaurant_tbl where rest_id='$rest_id' ",$con);
          
            while ($row=mysql_fetch_assoc($res)) {
              $lat1=$row["latitude"];
              $long1=$row["longitude"];
              $address=$row["rest_add"];

              echo 'var latlng = new google.maps.LatLng('.$row["latitude"].','.$row["longitude"].');';
            }

  ?>
       //var latlng = new google.maps.LatLng(28.535516,77.391026);
        var map = new google.maps.Map(document.getElementById('map'), {
          center: latlng,
          zoom: 17
        });
        var marker = new google.maps.Marker({
          map: map,
          position: latlng,
          draggable: false,
          anchorPoint: new google.maps.Point(0, -29)
       });
        var infowindow = new google.maps.InfoWindow();   
        google.maps.event.addListener(marker, 'click', function() {
          var iwContent = '<div id="iw_container">' +
          '<div class="iw_title"><b>Location</b> : <?php echo $address; ?></div></div>';
          // including content to the infowindow
          infowindow.setContent(iwContent);
          // opening the infowindow in the current map and at the current marker location
          infowindow.open(map, marker);
        });
    }	
    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
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

<body>
<form action="individual.php?rest_id=<?php echo $rest_id;?>" method="post">	

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
        <li class='active'><a href='#'>About<span class='sr-only'>(current)</span></a></li>
        <li><a  href='menuphotos.php?rest_id=".$row['rest_id']."'>Menu photos</a></li>
		<li><a href='otherphotos.php?rest_id=".$row['rest_id']."'>Otherphotos</a></li>
		<li><a href='review.php?rest_id=".$row['rest_id']."'>Reviews</a></li>
</ul>
<div>
    </h4>
	
  </div>
</nav>";
						echo"<ul class='grid-blog'>
							<li><i ><button type='button' class='btn btn-default '>
  <span class='glyphicon glyphicon-phone-alt' aria-hidden='true'>  call</span>
</button>
 </i></li>&nbsp;&nbsp;
&nbsp;&nbsp<li><a href='booktable.php?rest_id=".$row['rest_id']."'><i><button type='button' class='btn btn-default '>
  <span class='glyphicon glyphicon-book' aria-hidden='true'>  bookatable</span>
</button>  </a></li>
<li><a href='order1.php?rest_id=".$row['rest_id']."'><div class='btn-group'>
					<button type='button' class='btn btn-success' style='width:150px'>ORDER ONLINE</button></div></a></li>
							
						</ul>";
						echo"<h3><span class='glyphicon glyphicon-map-marker' aria-hidden='true'>Address:</span> ".$row['rest_add']."</h3>";
						echo"<div id='map' style='width: 700px; height: 250px;'></div>";

						echo"<h3>Cusines:".$row['cusines']."</h3>";
						echo"<h3>Cost for 2:".$row['cost']."</h3>";
						echo"<h3>Hours:".$row['opening_status']."</h3>";
						echo"<h3>Spotlight:".$row['highlights']."</h3>";
				echo"</div>
		</div>
		
		
		";}
		?>
		
		<?php
		$obj4=new database();
	
		$res4=$obj4->getdiscountrest($rest_id);
		while($row=mysql_fetch_array($res4,MYSQL_ASSOC))
		{
		
		echo'<div class="alert alert-info" role="alert"><h4>!!  '.$row['discount_desc'].'</h4></div>';
		}
		
		?>
		
		
		
		
		<?php
		
		
		
		$obj2=new database();
		$res2=$obj2->disrev($rest_id);
		$email=$_SESSION["email"];
		while($row=mysql_fetch_array($res2,MYSQL_ASSOC))
		{
			
		echo"<div class='comment'>";
							echo"<h3>Reviews</h3>";
							echo" <div class='media wow fadeInLeft animated' data-wow-delay='.5s'>";
								echo"<div class='code-in'>";
									echo"<p class='smith'><a href='#'>".$row['user_name']."</a> <span>".$row['review_date']. "</span></p>";
									
									echo"<div class='clearfix'> </div>";
									echo"</div>";
							    echo"<div class='media-left'>
							        <a href='#'>
							        	<img src='../images/".$row['pro_pic']."' style='width:150px; height:150px;' alt=''>
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
	 
	if(isset($_POST["btnadd"]))
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
			header('Location:review.php?rest_id='.$rest_id.'');
			
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
  
  <textarea name="area1" cols="100" rows="10" >
</textarea><br/>
  <h4>
 
  		<input type="submit" name="btnadd" value="Add Your Opinion" class="btn btn-info text-center">
	</div>
	





		
		
		
</div>

		</div>
	
		  <?php

  if(isset($_POST['btngo']))
  {
	  $search=$_POST["txtsearch"];
	$search1=strtolower($search);
	    $obj=new database();
            $res=$obj->search($search1);
			$cnt=mysql_num_rows($res);
				
            if($cnt>=1)
           {
				
				while($row=mysql_fetch_array($res,MYSQL_ASSOC))
				{
						Header('Location:restaurantsearch.php?rest_id='.$row['rest_id'].'');
				}	
				
			}
			else
				{
					header("location:noresult.php");
				}

			
  }
  
  
  ?>
		
		
			
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

<!-- Mirrored from p.w3layouts.com/demos/21-03-2016/cookery/web/single.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2017 08:10:33 GMT -->
</html>

