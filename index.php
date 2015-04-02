<?php
	require 'header.php';
?>

<hr>
<br>

<?php
	require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/Warsztaty');

/*
$router->map('GET', '/', 'main.php');
$router->map('GET|POST', '/connect', 'connect.php');
$router->map('GET|POST', '/footer', 'footer.php');
$router->map('GET|POST', '/header', 'header.php');
$router->map('GET|POST', '/logowanie', 'logowanie.php');
$router->map('GET|POST', '/body', 'body.php');
$router->map('GET|POST', '/profil', 'profil.php');
$router->map('GET|POST', '/rejestracja', 'rejestracja.php');
$router->map('GET|POST', '/wyloguj', 'wyloguj.php');
$router->map('GET|POST', '/zalogowany', 'zalogowany.php');
$router->map('GET|POST', '/zarejestrowany', 'zarejestrowany.php');

$match = $router->match();

var_dump($match);

if ($match) {
	require $match['target'];
} else {
	echo "Jeżeli widzisz ten napis tzn. że routing nie działa :(";
}
*/

if (isset($_SESSION['user_name'])) {
	require 'body.php';
} else {
	require 'main.php';
};

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
	require 'footer.php';
?>