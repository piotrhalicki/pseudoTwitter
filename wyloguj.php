<?php

// session_start();
session_destroy();

if (isset($_SESSION)) {
//echo '<strong>' .$_SESSION['user_name'], '</strong>';
//} else {
	echo ("<h1 style='text-align: center'><strong>< Zostałeś wylogowany ></strong></h1>");
};
	/*
	if (isset($_COOKIE["k!tterLogOut"])) {
		//setcookie('k!tter', "", time()-1800);
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
header("Refresh: 10; url=/Warsztaty");

?>

<p style="text-align: center">
Do przekierowania pozostało: <span id="odliczanie">10</span><br>;)
</p>