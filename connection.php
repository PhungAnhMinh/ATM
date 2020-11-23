<?php
	$server= 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'atm';
	
	$conn = mysqli_connect($server, $user, $pass, $db) or die ('not connection');
	mysqli_query($conn,'set names "utf8"');
?>