<?php

// Powitanie

if (isset($_COOKIE["k!tter"])) {
	echo '<h1 style="text-align: center">', ucfirst($_COOKIE['k!tter']), ", witaj na k!tterze! :)", '</h1>';
}
else {
	echo '<h1 style="text-align: center">', ucfirst($_SESSION['user_name']), ", witaj na k!tterze! :)", '</h1>';
};

										// OBSŁUGA METODY 'POST'
										// Kasowanie

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['deleteUser'])) {
		$conn->query ("DELETE FROM User WHERE id=".$_SESSION['user_id']); // poprawić składnię - $_SESSION powinno byc w {} ?
		echo "profil skasowany";
	}
										// Dodawanie Postów
	
	if (isset($_POST['przy_k!ttuj'])) {
		$data = date('Y-m-d H:i:s');
		$conn->query ("insert into Posts (user_id, tresc, data) values ('{$_SESSION['user_id']}', '{$_POST['post']}', '$data')");
		echo 'kit dodany';
	}
										// Komentowanie Postów	
	
	if(isset($_POST['komentK!tt'])) {
		$data = date('Y-m-d H:i:s');
		$conn->query ("insert into Komentarze (user_id, post_id, koment_tresc, koment_data) values ('{$_SESSION['user_id']}', '{$_POST['post_ID']}', '{$_POST['koment']}', '$data')");
		echo "Komentarz dodany";
		}
};

?>

<br>
										<!-- DANE PROFILU -->

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< Dane Twojego profilu: ></h3></legend>
	<p>
		<strong>Longin:</strong> <?php echo $_SESSION['user_name'] ?><br>
		<strong>Emalia:</strong> <?php echo $_SESSION['user_mail'] ?><br>
		<strong>Hasłord: </strong>znasz tylko Ty ;)<br>
		<p><input type="submit" name="modyfikacja" value="mody_k!ttuj profil"><br>(Soon...)<br></p>
		
		<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if(isset($_POST['modyfikacja'])) {
			echo "<form method='POST' action='#'>", 
			"<fieldset>",
			"<strong>", "Login: ", "</strong>", "<br>",
			"<strong>", "e-mail: ", "</strong>", "<br>",
			"<input type='submit' name='wyslijWiado' value='Wyślij k!ttomość'>", "<br>",
			"<input type='submit' name='deleteFriend' value='Usuń przyk!ttaciela'>", "<br>",
			"</fieldset>",
			"</form>",
			"<br>";
			}
			};
		?>
	</p>
		</fieldset>
	</p>
</div>

<br>
										<!-- DODAWANIE POSTÓW -->

<div style="text-align: center">
	<form method="POST" action="#">
	<p>
		<fieldset>
		<legend><h3>< k!ttuj: ></h3></legend>
	<p>
		<label>
	<p>
		<textarea name="post" cols="50" rows="10" placeholder="Wpisz k!tt... (dodaj post)"></textarea>
		<input type="hidden" name="postData" value="<?php echo date("Y-m-d H:i:s"); ?>">	
	</p>
		<input type="submit" name="przy_k!ttuj" value="przy_k!ttuj">
		</label>
		</p>
		</fieldset>	
	</p>
	</form>
</div>

<br>
										<!-- OSTATNI POST -->

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< Ostatni k!tt: ></h3></legend>
	<p>
<?php

$sql = "SELECT * FROM Posts WHERE user_id=".$_SESSION['user_id']." ORDER BY data DESC LIMIT 1";
$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<fieldset>",
		"<strong>", "Treść: ", "</strong>", "<em>".$row["tresc"]."</em>", "<br>",
		"<strong>", "Data: ", "</strong>", "<em>".$row["data"]."</em>", "<br>",
		"<form method='post' action=".$_SERVER['PHP_SELF'].">",
		"<textarea type='text' name='koment'></textarea><br>",
		"<input type='hidden' name='post_ID' value=".$row['post_id'].">",
		"<input type='submit' name='komentK!tt' value='Skomentuj'><br>",
		"</form>",
		"<input type='submit' name='deleteK!tt' value='Usuń k!tt!'>", "<br>",
		"</fieldset>";
		var_dump($_POST['komentK!tt']);
	}
}
else {
	echo ("<strong>Brak k!ttów!</strong><br><br>");
};
?>
	</p>
		</fieldset>
	</p>
</div>

<br>
										<!-- WIADOMOŚCI -->

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< k!tt-o-mości ></h3></legend>
	<p>
		k!tt-o-mości odebrane<br>
		k!tt-o-mości wysłane<br>
		(Soon...)
	</p>
		</fieldset>
	</p>
</div>

<br>
										<!-- ZNAJOMI -->

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< Znajomi k!tterzy ></h3></legend>
	<p>
		<?php 
		$sql = "SELECT * FROM Friends F1 
				JOIN User ON F1.friend1_id=User.id 
				JOIN User U2 ON U2.id=F1.friend2_id 
				WHERE friend1_id=".$_SESSION['user_id'].""; 
		$result = $conn->query ($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		// $_SESSION['friend_id'] = $row['id'];
		// var_dump($_SESSION['friend_id']);
		
		echo "<form method='POST' action='#'>", 
			"<fieldset>",
			"<strong>", "Login: ", "</strong>", "<em>".$row["name"]."</em>", "<br>",
			"<strong>", "e-mail: ", "</strong>", "<em>".$row["email"]."</em>", "<br>",
			"<input type='hidden' name='ID' value=".$row['id'].">",
			"<input type='hidden' name='login' value=".$row['name'].">",
			"<input type='submit' name='wyslijWiado' value='Wyślij k!ttomość'>", "<br>",
			"<input type='submit' name='deleteFriend' value='Usuń przyk!ttaciela'>", "<br>",
			"</fieldset>",
			"</form>",
			"<br>";
		}
}
else {
	echo ("<strong>Jeszcze nie masz przyk!ttaciół! :(</strong><br><br>");
}
?>
	</p>
		</fieldset>
	</p>
</div>

<br>
										<!-- USUWANIE PROFILU -->

<div style="text-align: center">
	<form method="POST" action="#">
	<p>
		<fieldset>
		<legend><h3>< Odwal k!tte ></h3></legend>
	<p>
		UWAGA! Poniższy przycisk skutecznie usuwa profil ale (jeszcze) nie prosi o potwierdzenie chęci usunięcia ;)
		<p><input type="submit" name="deleteUser" value="Odwal k!tte"></p>
	</p>
		</fieldset>
	</p>
	</form>
</div>