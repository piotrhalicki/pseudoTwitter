<!DOCTYPE html>

<html lang="pl-PL">
<meta charset="UTF-8">

<head>
	<meta charset="UTF-8">
	<meta name="Pseudo Twitter" content="ćwiczenia">	
	<title>						
	Pseudo Twitter
	</title>
</head>


<?php
require 'header.php';
?>

<br>
<hr>
<br>

<?php
require 'connect.php';
?>

<form action="#" method="POST">
<fieldset>
		<legend><strong>Zarejestruj się</strong></legend> 
<p> 						
	<label> 				
		Podaj login:
	<br>
		<input type="text" name="login" placeholder="Podaj login">
	</label>
</p>
<p> 						
	<label> 				
		Podaj adres mailowy:
	<br>
		<input type="text" name="mail" placeholder="Podaj adres mailowy">
	</label>
</p>
<p> 						
	<label> 				
		Wprowadź hasłord:
	<br>
		<input type="password" name="pass" placeholder="Wprowadź hasło">
	</label>
</p>
<p> 						
	<label> 				
		Powtórz hasłord:
		<br>
		<input type="password" name="pass2" placeholder="Powtórz hasło">
	</label>
</p>
	<p>
	<button type="submit">Zarejestruj</button>
	</p>
	</form>
	</fieldset>
<br>
<hr>
<br>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if($_POST['pass'] !== $_POST['pass2']) {
		echo "Podane przez Ciebie hasła się różnią";
	}
	else {
		$options = [
			'cost' => 11,
			'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		];
		$hashed_password = password_hash($_POST['pass'], PASSWORD_BCRYPT, $options);
		$conn->query ("INSERT INTO User(name, password) values ('{$_POST['login']}', '$hashed_password')");
	}
};

$conn->close(); // zamykanie tabeli ZAWSZE na końcu - to logiczne!
$conn = null; 	// zamykanie tabeli ZAWSZE na końcu - to logiczne!

?>

<br>
<hr>
<br>

<?php
require 'footer.php';
?>