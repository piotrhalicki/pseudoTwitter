<?php
session_start();
if(!isset($_SESSION['licznik'])) {
	$_SESSION['licznik'] = 1;
}
else {
	$_SESSION['licznik']++;
};

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

<?php
include("connect.php"); 

if (isset($_SESSION['user_name'])) {
	echo ("
		<p>
		<dl>
		<dd><a href='rejestracja.php'>Zarejestruj się</a><dd>
		<dd><a href='logowanie.php'>Zaloguj się</a><dd>
		</p>
		</dl>
		");
};

if (!isset($_SESSION['user_name'])) {
	echo ("
		<p>
		<dl>
		<dd><a href='rejestracja.php'>Zarejestruj się</a><dd>
		<dd><a href='logowanie.php'>Zaloguj się</a><dd>
		</p>
		</dl>
		");
};	// wiem że to niezgrabne ale.. skuteczne ;)
	?>
	

</body>

<html>