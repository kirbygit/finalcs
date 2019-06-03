<?php
session_start();
// connect to database
$conn = mysqli_connect("localhost", "root", "root", "csfinal");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

// defined global constants
define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/cs-final/');
?>