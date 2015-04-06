<?php
include('header.php');
?>

<hr>
<br>
<center>
<?php
include('logo.php');
?>
</center>
<?php

require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/Warsztaty');

$router->map('GET|POST', '/', 'main.php');
$router->map('GET|POST', '/body', 'body.php');
$router->map('GET|POST', '/connect', 'connect.php');
$router->map('GET|POST', '/logowanie', 'logowanie.php');
$router->map('GET|POST', '/profil', 'profil.php');
$router->map('GET|POST', '/rejestracja', 'rejestracja.php');
$router->map('GET|POST', '/wyloguj', 'wyloguj.php');
$router->map('GET|POST', '/uzytkownicy', 'allUsers.php');
$router->map('GET|POST', '/zalogowany', 'zalogowany.php');
$router->map('GET|POST', '/zarejestrowany', 'zarejestrowany.php');
$router->map('GET|POST', '/logo', 'logo.php');
$router->map('GET|POST', '/kopniecieWkalendarz', 'kita.php');

$match = $router->match();

// var_dump($match);

if ($match) {
	require $match['target'];
}; 

if (!isset($_SESSION['user_name']) && !(($match['target'] == "main.php" || $match['target'] == "logowanie.php" || $match['target'] == "rejestracja.php"))) {
	header("Location: /Warsztaty/");
	if (isset($_SESSION['user_name']) && ($match['target'] == "body.php")) {
		header("Location: /Warsztaty/body");
	};
};

// elseif (isset($_SESSION['user_name']) && !($match['target'] == "body.php")) {
//	header("Location: /Warsztaty/body");
//}

/*
else {
	echo "Jeżeli widzisz ten napis tzn. że routing nie działa :(";
}
*/

//else {
//	header("Location: /Warsztaty/main");
//};

/*
if (!isset($_SESSION['user_name']) || !isset($_COOKIE['k!tter'])) {
	require 'main.php'; // body jest dla zalogowanego
} else if (!isset($_SESSION['user_name']) || isset($_COOKIE["1427729022"])) {
	require 'main.php'; // main jest dla niezalogowanego
} else if (isset($_COOKIE['k!tter']) || isset($_SESSION['user_name'])) {
	require 'body.php';
}
*/

?>

<br>
<hr>

<?php
include('footer.php');
?>