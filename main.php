										<!-- POWITANIE -->

<h1 style="text-align: center">
< <strong>Witaj</strong> >
</h1>

<?php 									// Sprawdzenie hasła, wpis do $_SESSION

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sql = "SELECT * FROM User 
			WHERE email = '{$_POST['mail']}'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$hashed_pass = $row['password'];
		if(password_verify($_POST['pass'], $hashed_pass)){
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];
			$_SESSION['user_mail'] = $_POST['mail'];
			// var_dump($_SESSION);
			header("Location: /Warsztaty/zalogowany");
			die();
		}
	}
	echo '<div style="color: red">', '<strong>', "Zły login lub hasło", '</strong>', '</div>', '<br>';
}

?>

										<!-- FORMULARZ LOGOWANIA -->

<div style="text-align: center">
<form method="POST" action="#">
	<fieldset>
	<legend><h3>< Zaloguj się: ></h3></legend>
<p>
	<label>Mail użytkownika:</label>
<br>
 	<input name="mail" type="text" placeholder="Wprowadź maila" value=""/>
</p>
<p>
	<label>Hasłord:</label>
<br>
    <input name="pass" type="password" placeholder="Wprowadź hasłord" value=""/>
</p>
<p>
    <button type="submit">Zaloguj się</button>
</p>
	</fieldset>
</form>
</div>