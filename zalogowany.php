<?php
	require 'header.php';
// var_dump($_SESSION);
	// $zalogowany = $_SESSION['user_name'];
	// setcookie('k!tter', $zalogowany, time()+300);
?>

	<hr>
<br>

<h1 style="text-align: center">
< <strong>Witaj <?php echo ucfirst($_SESSION['user_name']) ?>! ></strong>
</h1>

<h2 style="text-align: center">
< <strong>Zalogowałeś się na <strong><em>k!tterze</em></strong> :) ></strong>
</h2>

<br>
<br>
	<hr>

<?php
	require 'footer.php';
?>