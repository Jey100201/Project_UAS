<?php
$conn = mysqli_connect('localhost','root','','tokosembako');
if (mysqli_connect_error()) {
	printf("Connect Failed", mysqli_connect_error());
	exit();
}
?>