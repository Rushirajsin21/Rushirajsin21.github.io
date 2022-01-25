<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>facbook lite</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="#">facbook lite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
	<?php
	if(isset($_SESSION['login'])&& $_SESSION['login']==true)
	{
		?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link" href="\rushbha\homes.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="\rushbha\post.php">Posts <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="\rushbha\create_post.php">Create New Post <span class="sr-only">(current)</span></a>
      </li>
	  </div>
      
      <?php
	}
	?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
	 
	<?php
	
	if(isset($_SESSION['login'])&& $_SESSION['login']==true)
	{
	?>
		 <li class="nav-item active">
        <a class="btn btn-danger my-2 my-sm-0" href="\rushbha\logout.php">Logout<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="btn btn-success my-2 my-sm-0" href="\rushbha\profile.php">Profile<span class="sr-only">(current)</span></a>
      </li>
	  <?php
	  }
	  else
	  {
	  ?>
	  
	 <li class="nav-item active">
        <a class="btn btn-primary my-2 my-sm-0" href="\rushbha\login.php">Login<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="btn btn-danger my-2 my-sm-0" href="\rushbha\register.php">Register<span class="sr-only">(current)</span></a>
      </li>
	  
	  <?php
	
	  }
	  ?>
	 
    </form>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<h1 align="center"></h1>
	<h2 align="center" color="red"></h2>
  </body>
</html>
