<?php
require_once('connect.php');
$readSql = "SELECT * FROM crud";
$result = mysqli_query($connection, $readSql);
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
			<h2 class="text-center">Web Form Results</h2>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">FIRST NAME</th>
			      <th scope="col">LAST NAME</th>
			      <th scope="col">STREET NUMBER</th>
			      <th scope="col">CITY</th>
			      <th scope="col">COUNTRY</th>
			      <th scope="col">EXTRAS</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  		while($r = mysqli_fetch_assoc($result)){ ?>
			    <tr>
			      <td><?php echo $r['first_name']; ?></td>
			      <td><?php echo $r['last_name']; ?></td>
			      <td><?php echo $r['street_number']; ?></td>
			      <td><?php echo $r['city']; ?></td>
			      <td><?php echo $r['country']; ?></td>
			      <td><a href="update.php?id=<?php echo $r['id']; ?>">Edit</a> | <a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a></td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
		</div><!-- row -->
	</div><!-- container -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<a href="index.php" type="button" class="btn btn-success">Go to index page</a>
			</div>
		</div>
	</div>


	
</body>
</html>