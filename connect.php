<?php

$connection = mysqli_connect('localhost', 'root', '');
if(!$connection) {
	die('Database Connection Failed' . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'web-form');
if(!$selectdb){
	die('Database Selection Failed' . mysqli_error($connection));
}

// $mysqli = new mysqli('localhost', 'root', '');
// if($mysqli->connect_errno) {
// 	echo "Cannot connect with database" . $mysql->connect_error;
// }

// try {
// 	$handler = new PDO('mysql:host=127.0.0.1;dbname=web-form', 'root', '');
// 	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch(PDOException $e) {
// 	echo $e->getMessage();
// 	die();
// }


	// if(!$handler) {
	// 	echo "There's a problem with connection...";
	// } else {
	// 	echo "Everything is ok. You're connected with database...";
	// }

?>