<!DOCTYPE html>

<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Pseudo Twitter" content="">	
	<title>						
	Pseudo Twitter
	</title>
</head>

<body>
	
<?php

	$servername = "localhost";
	$username = "root";
	$password = "cwiczenia";
	$baseName = "Strona";

	$conn = new mysqli($servername, $username, $password, $baseName);
	$conn -> query ('SET NAMES utf8');

	if ($conn->connect_error) {
		die("Połączenie nieudane. Błąd: " . $conn->connect_error);
	}
	else {
		echo "Połączenie z bazą ", '<strong>', $baseName, '</strong>', " udane :)";
		echo '<br>', '<br>';
	};

?>

</body>
</html>
