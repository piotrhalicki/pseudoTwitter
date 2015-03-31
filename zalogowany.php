<?php
require 'header.php';
var_dump($_SESSION);
	$zalogowany = $_SESSION['user_name'];
	setcookie('k!tter', $zalogowany, time()+300);
?>

	<hr>
<br>



<?php
	echo '<h1>', "Witaj ", $_SESSION['user_name'], "! :)", '</h1>';
	echo '<h2>', "Zalogowałeś się na stronie k!tter :)", '</h2>';
?>

<br>
	<hr>

<?php
	require 'footer.php';
?>