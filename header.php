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
	<meta name="K!tter" content="ćwiczenia">	
	<title>						
	< k!tter >
	</title>
</head>

<body>

<?php

include("connect.php"); 

if (!isset($_SESSION['user_name'])) {
	echo ("
		<p>
		<dl>
		<dd><a href='/Warsztaty/rejestracja'>Zarejestruj się</a><dd>
		<dd><a href='/Warsztaty/logowanie'>Zaloguj się</a><dd>
		</p>
		</dl>
		");
} else {
		echo ("
		<p>
		<dl>		
		<dd><a href='/Warsztaty/profil'>Twój profil</a></dd>
		<dd><a href='/Warsztaty/wyloguj'>Wyloguj</a></dd>
		<dd><a href='/Warsztaty/uzytkownicy'>Pokaż innych użytkowników</a><dd>
		</dl>
		</p>	
		");
	};
	
	
	
	
?>

</body>

<html>