<?php
	require 'header.php';
?>

	<hr>
<br>

<?php
	if (isset($_COOKIE["k!tter"])) {
		setcookie('k!tter', time()-1800);
		echo '<strong>', "Zostałeś wylogowany", '</strong>';
	} else {
		isset($_SESSION['user_name']);
		session_destroy();
		echo '<strong>', "Zostałeś wylogowany", '</strong>';
	};	
	
	//	echo '<strong>' .$_SESSION['user_name'], '</strong>';
	//} else {
	//	echo '<strong>', "Zostałeś wylogowany", '</strong>';
	//}
?>

<br>
<br>
	<hr>

<?php
	require 'footer.php';
?>