									<!-- FORMULARZ REJESTRACJI -->
									
<div style="text-align: center">
<form action="#" method="POST">
	<fieldset>
	<legend> < <strong>Zarejestruj się</strong> > </legend> 
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
	<input type="password" name="pass" placeholder="Wprowadź hasłord">
	</label>
</p>
<p> 						
	<label> 				
	Powtórz hasłord:
<br>
	<input type="password" name="pass2" placeholder="Powtórz hasłord">
	</label>
</p>
<p>
	<button type="submit">Zarejestruj się</button>
</p>
	</fieldset>
</form>
</div>
	
<?php									// "HASZOWANIE" HASŁA

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if($_POST['pass'] !== $_POST['pass2']) {
		echo "Podane przez Ciebie hasła się różnią";
	} else {
		$options = [
			'cost' => 11,
			'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
		];
		$hashed_password = password_hash($_POST['pass'], PASSWORD_BCRYPT, $options); 
		// var_dump($_POST);
		$conn->query ("INSERT INTO User(name, password, email) VALUES('{$_POST['login']}', '$hashed_password', '{$_POST['mail']}')");
		$last_id = $conn->insert_id;
		$_SESSION['user_name'] = $_POST['login'];
		$_SESSION['user_mail'] = $_POST['mail'];
		$_SESSION['user_id'] = $last_id;
		header("Location: /Warsztaty/zarejestrowany");
	};
}; // if / error 

//$conn->close(); // zamykanie tabeli ZAWSZE na końcu - to logiczne!
//$conn = null; 	// zamykanie tabeli ZAWSZE na końcu - to logiczne!

?>