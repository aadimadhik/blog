<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">


		  	<a class="navbar-brand" href="http://www.skeinsoft.com"><img src="{{ asset('images/skein-logo.png') }}" width="40px" /></a>
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navb">
			    
			    <ul class="navbar-nav mr-auto">

			      <li class="nav-item">
			        <a class="nav-link" href="/">Home</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link" href="/create">Form</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link" href="/list">Student List</a>
			      </li>

			    </ul>
			    
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="text" placeholder="Search">
			      <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
				 </form>
			  
			  </div>
		  
		</nav>

		<div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="{{ asset('images/course1.jpg') }}" alt="course1" width="100%" height="500">
			      <div class="carousel-caption">
			        <h3>PHP with Laravel</h3>
			        <p>Build your carrer as a Laravel Developer!</p>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/course2.jpg') }}" alt="course2" width="100%" height="500">
			      <div class="carousel-caption">
			        <h3>Flutter</h3>
			        <p>Build your carrer as an App Developer!</p>
			      </div>   
			    </div>
			    <div class="carousel-item">
			      <img src="{{ asset('images/course3.jpg') }}" alt="course3" width="100%" height="500">
			      <div class="carousel-caption">
			        <h3>Game Development with Unity</h3>
			        <p>Build your carrer as a Game Developer!</p>
			      </div>   
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
		</div>

		<br><br>
		<h2 style="text-align: center;">Welcome</h2>
		<p>Welcome to one of best IT C</p>

	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>