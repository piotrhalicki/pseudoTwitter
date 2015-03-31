<?php
if (isset($_SESSION)) {
require 'header_wylog.php';
}; 
if (!isset($_SESSION)) {
require 'header_wylog.php';
};	// wiem że to niezgrabne ale.. skuteczne ;)

?>

	<hr>
<br>

<?php
if (isset($_SESSION)) {
session_destroy();
//echo '<strong>' .$_SESSION['user_name'], '</strong>';
//} else {
echo ("<h1 style='text-align: center'><strong>Zostałeś wylogowany</strong></h1>");
}

	/*
	if (isset($_COOKIE["k!tterLogOut"])) {
		//setcookie('k!tter', time()-1800);
		echo '<strong>', "Zostałeś wylogowany", '</strong>';
	} else {
		!isset($_SESSION['user_name']);
		//session_destroy();
		echo '<strong>', "Zostałeś wylogowany", '</strong>';
	};	
	
	//	echo '<strong>' .$_SESSION['user_name'], '</strong>';
	//} else {
	//	echo '<strong>', "Zostałeś wylogowany", '</strong>';

	//}
	 */
?>

<br>
<br>
	<hr>

<?php
	require 'footer.php';
?>