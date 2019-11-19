<!DOCTYPE html>
<html>

<head>
	<title>Students Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="container-fluid">

	<form action="{{ url('posts') }}" method="POST" role="form">
	@csrf
	<h1>Post</h1>
	<div class="col-md-5">

		<div class="container contact-form" style="background: rgba(0,0,0,.8);color:white ;margin-top:100px; padding:40px; box-shadow:0px 0px 10px 7px grey;">
			
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title" placeholder="Enter your title" name="title">
			</div>

			<div class="form-group">
			<label for="description">Description:</label>
			<textarea class="form-control" id="description" placeholder="Enter your description" name="description">
				
			</textarea>
			</div>		

		<button type="submit" class="btn btn-primary">Submit</button>
		<button type="reset" class="btn btn-primary">Cancel</button>
		</div>
	</div>
		</form>
	

	<script type="text/javascript" src="{{ asset('js/script.js') }}">
		
	</script>
</body>
</html>