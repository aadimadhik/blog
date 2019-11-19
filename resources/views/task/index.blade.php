<!DOCTYPE html>
<html>

<head>
	<title>Student Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body class="bodyclass">
	<div class="main-div">
	<h1>Students Form</h1>
	
	<form name="students-form" method="post">
		<label for="name">Name:</label>
		<input type="text" name="name" class="form-control" id="name" />
	</br>
		<label for="roll">Roll:</label>
		<input type="number" name="roll" />
	</br>
		<label for="faculty">Faculty:</label>
		<select name="faculty">
			<option>BSc.CSIT</option>
			<option>BCA</option>
			<option>BBA</option>
			<option>BSc.Physics</option>
			<option>BSc.Chemistry</option>
		</select>
	</br>
		<input type="submit" />	
		<input type="reset" />
	</form>
	</div>

	<script type="text/javascript" src="{{ asset('js/script.js') }}">
		
	</script>
</body>
</html>