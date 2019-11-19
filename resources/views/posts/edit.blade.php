<!DOCTYPE html>
<html>
<head>
	<title>Edit Post</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container-fluid">
		<form action="" method="POST" role="form">
	<h1>Post</h1>
	<p>Edit Mode</p>
	<div class="col-md-5">

		<div class="container contact-form" style="background: rgba(0,0,0,.8);color:white ;margin-top:100px; padding:40px; box-shadow:0px 0px 10px 7px grey;">
			
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title" placeholder="Enter your title">
			</div>

			<div class="form-group">
			<label for="description">Description:</label>
			<textarea class="form-control" id="description" placeholder="Enter your description">
				
			</textarea>
			</div>		

		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">Cancel</button>
		</div>
	</div>
		</form>
	</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>