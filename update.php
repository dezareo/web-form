<?php 
require_once('connect.php');
$id = $_GET['id'];
$selectSql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($connection, $selectSql);
$r = mysqli_fetch_assoc($result);
	if(isset($_POST) & !empty($_POST)){
	$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
	$street_number = mysqli_real_escape_string($connection, $_POST['street_number']);
	$city = mysqli_real_escape_string($connection, $_POST['city']);
	$country = mysqli_real_escape_string ($connection, $_POST['country']);

	$updateSql = "UPDATE crud SET first_name='$first_name', last_name='$last_name', street_number='$street_number', country='$country', city='$city' WHERE id=$id";
	$result = mysqli_query($connection, $updateSql);
	if($result) {
		echo "Successfuly updated data.";
	} else {
		echo "Fail to update data.";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update Web Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<form  method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<h2 class="text-center">Update - Web Form</h2>

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">First Name</label>
					<div class="col-sm-9">
						<input type="text" name="first_name" class="form-control" id="input1" value="<?php echo $r['first_name']; ?>" placeholder="First Name" />
					</div>
				</div><!-- /first name -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">Last Name</label>
					<div class="col-sm-9">
						<input type="text" name="last_name" class="form-control" id="input1" value="<?php echo $r['last_name']; ?>" placeholder="Last Name" />
					</div>
				</div><!-- /last name -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">Street/Number</label>
					<div class="col-sm-9">
						<input type="text" name="street_number" class="form-control" id="input1" value="<?php echo $r['street_number']; ?>" placeholder="Street/Number" />
					</div>
				</div><!-- /Street/Number -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">City</label>
					<div class="col-sm-9">
						<input type="text" name="city" class="form-control" id="input1" value="<?php echo $r['city']; ?>" placeholder="City" />
					</div>
				</div><!-- /City -->

				<div class="form-group">
					<label for="input1" class="col-sm-3 control-label">Country</label>
					<div class="col-sm-9">
						<input type="text" name="country" class="form-control" id="input1" value="<?php echo $r['country']; ?>" placeholder="Country" />
					</div>
				</div><!-- /Country -->
				<input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="update" />
			</form>
		</div><!-- /row -->
	</div><!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="index.php" type="button" class="btn btn-success">View All Results</a>
			</div>
		</div>
	</div>

</body>
</html>