<title>no result found</title>

<?php
include('header.php');

?>

<div class='blog'>
	<div class='container'>
	<div class='menu-top'>
				<div class='col-md-4 menu-left'>
					<h3>Restuarants</h3>
					<label><i class='glyphicon glyphicon-menu-up'></i></label>
					
				</div>
				<div class='col-md-9 blog-header'>
				<div class='blog-head' style='height:400px'>
				
				<div class="alert alert-danger" role="alert">oops!!  No Result found</div>
			
				<?php
 


  if(isset($_POST['btnsubmit']))
  {
	  $search=$_POST["txtsearch2"];
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

  <div class='search-in animated wow fadeInUp' data-wow-duration='1000ms' data-wow-delay='500ms'>
				<h4>Search</h4>
					<div class='search'>
					<form>
						<input type='text' name='txtsearch2' placeholder='Search' required='' >
						<input type='submit' name='btnsearch' value='' >
					</form>
					</div>
	
</div>
</div>
  </div>
    </div>
<?php
include('footer.php');

?>