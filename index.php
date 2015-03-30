<?php
require 'vendor/autoload.php';

$router = new AltoRouter();
$router->setBasePath('/Warsztaty');
?>

<?php
require 'header.php';
?>

<hr>
<br>

<?php

if (isset($_COOKIE["k!tter"]) || isset($_SESSION['user_name'])) {
	require 'body.php';
} else {
	require 'main.php';
};

?>

<br>
<hr>

<?php
require 'footer.php';
?>
