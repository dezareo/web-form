<?php
require_once('connect.php');
$id = $_GET['id'];
$deleteSql = "DELETE FROM crud WHERE id=$id";
$result = mysqli_query($connection, $deleteSql);
if($result) {
	header('location: view.php');
} else {
	echo"Failed to delete Record";
}
?>