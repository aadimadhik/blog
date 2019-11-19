<!DOCTYPE html>
<html>

<head>
	<title>Define Roles</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="container-fluid">

	<form action="{{ url('roles') }}" method="POST" role="form">
		@csrf
	<legend style="font-family: cursive; font-size: 40pt;">Roles</legend>

	<div class="col-md-5">

		<div class="container contact-form" style="background: rgba(0,0,0,.8);color:white ;margin-top:100px; padding:40px; box-shadow:0px 0px 10px 7px grey;">
			
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
			</div>

			<div class="form-group">
			<label for="role">Description:</label>
			<div class="radio">
				
					<input type="radio" name="role" id="admin" value="admin" checked="checked" />
					Admin
					<input type="radio" name="role" id="editor" value="editor" />
					Editor
				
			</div>
			
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