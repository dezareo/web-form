<?php 
require_once('connect.php');
//require_once('validation.php');

if(isset($_POST) & !empty($_POST)){
	$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
	$street_number = mysqli_real_escape_string($connection, $_POST['street_number']);
	$city = mysqli_real_escape_string($connection, $_POST['city']);
	$country = mysqli_real_escape_string ($connection, $_POST['country']);

	$createSql = "INSERT INTO crud (first_name, last_name, street_number, city, country) VALUES ( '$first_name', '$last_name', '$street_number', '$city', '$country')";
	$result = mysqli_query($connection, $createSql);
	if($result) {
		echo "Successfuly inserted data.";
	} else {
		echo "Fail to insert data.";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
		<div class="row">
			<form  method="post" class="form-horizontal col-xs-12 col-md-6 col-md-offset-3">
				<h2 class="text-center">Web Form</h2>

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">First Name</label>
					<div class="col-sm-9">
						<input type="text" name="first_name" class="form-control" id="input1" placeholder="First Name" data-validation="length" data-validation-length="min4" />
					</div>
				</div><!-- /first name -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">Last Name</label>
					<div class="col-sm-9">
						<input type="text" name="last_name" class="form-control" id="input1" placeholder="Last Name" data-validation="length" data-validation-length="min4" />
					</div>
				</div><!-- /last name -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">Street/Number</label>
					<div class="col-sm-9">
						<input type="text" name="street_number" class="form-control" id="input1" placeholder="Street/Number" data-validation="length" data-validation-length="min4" />
					</div>
				</div><!-- /Street/Number -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">City</label>
					<div class="col-sm-9">
						<input type="text" name="city" class="form-control" id="input1" placeholder="City" data-validation="length" data-validation-length="min4" />
					</div>
				</div><!-- /City -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">Country</label>
					<div class="col-sm-9">
						<input type="text" name="country" class="form-control" id="input1" placeholder="Country" data-validation="length"  data-validation-length="min4" />
					</div>
				</div><!-- /Country -->
				<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit" />
			</form>	
		</div><!-- /row -->
	</div><!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="view.php" type="button" class="btn btn-success">View All Results</a>
			</div>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="google_map.php" type="button" class="btn btn-danger">Show Your Location on Google Maps</a>
			</div>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
	<script>
	  $.validate({
	    lang: 'en'
	  });
	</script>
</body>
</html>