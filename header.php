<?php
session_start();
if(!isset($_SESSION['licznik'])) {
	$_SESSION['licznik'] = 1;
}
else {
	$_SESSION['licznik']++;
}
?>

<!DOCTYPE html>

<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Kitter" content="ćwiczenia">	
	<title>						
	Kitter
	</title>
</head>
<body>
<p>
<?php
include("connect.php");
?>
<a href="rejestracja.php">Zarejestruj się</a><br>
<a href="logowanie.php">Zaloguj się</a><br>
<a href="profil.php">Twój profil</a><br>
<a href="wyloguj.php">Wyloguj</a>
</p>

</body>

<html>