<?php

	
	$obj1=new database();
		$res1=$obj1->discat1();
	
		echo"<div class='col-md-3 categories-grid'>
			<div class='search-in animated wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='500ms'>
				
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
  echo"<p><a class='btn btn-primary btn-lg' href='famous.php' role='button'>Find famous food!</a></p>";
echo"</div>";
	echo"</div>
	
				</div>
";
?>
