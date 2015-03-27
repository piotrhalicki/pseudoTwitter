<?php
require 'header.php';
?>

<hr>
<br>

<?php
session_destroy();

if (isset($_SESSION['user_name'])) {
	echo '<strong>' .$_SESSION['user_name'], '</strong>';
} else {
	echo '<strong>', "Zostałeś wylogowany", '</strong>';
}
?>

<br>
<br>
<hr>

<?php
require 'footer.php';
?>