<html>
<head>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<link href="Content/bootstrap.css" rel="stylesheet"/>
<script src="Scripts/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a style="color:blue;" class="navbar-brand" href="#">Lazeezo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a style="margin-left:10px;" href="">View Restaurants</a></li>
        <li><a style="margin-left:10px;" href="">View Users</a></li>
        <li><a style="margin-left:10px;" href="approval.php">Approval</a></li>
        <li><a style="margin-left:10px;" href="">Add Menu Photos</a></li>
        
		 </li>
      </ul>
	  
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button style="margin-left:20px;" type="submit" class="btn btn-success">Submit</button>
        

	
	</form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">View Profile <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile Photo</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</body>
</html>