<!DOCTYPE html>
<html>

<head>
	<title>Students Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="container-fluid">

	<form action="" method="POST" role="form">
	<legend style="font-family: cursive; font-size: 40pt;">Student Form</legend>

	<div class="col-md-5">

		<div class="container contact-form" style="background: rgba(0,0,0,.8);color:white ;margin-top:100px; padding:40px; box-shadow:0px 0px 10px 7px grey;">
			
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" placeholder="Enter your name">
			</div>

			<div class="form-group">
			<label for="name">Roll no:</label>
			<input type="number" class="form-control" id="roll" placeholder="Enter your roll no">
			</div>

			<div class="form-group">
			<label for="name">Address:</label>
			<input type="text" class="form-control" id="address" placeholder="Enter your Address">
			</div>

			<div class="form-group">
			<label for="name">Gender:</label>
			<div class="radio">
				
					<input type="radio" name="gender" id="male" value="" checked="checked" />
					Male
					<input type="radio" name="gender" id="female" value="" />
					Female
				
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