<?php

	$servername = "localhost";
	$username = "root";
	$password = "cwiczenia";
	$baseName = "Strona";

	$conn = new mysqli($servername, $username, $password, $baseName);
	$conn -> query ('SET NAMES utf8');

	if ($conn->connect_error) {
		die("Połączenie nieudane. Błąd: " . $conn->connect_error);
	};

?>