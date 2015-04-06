<?php
if (!isset($_SESSION['user_name'])) {
	echo ("<h1 style='text-align: center'>< <strong>Nie jesteś zalogowany!</strong> ></h1>");
	// echo ("<br><br><hr>");
?>
<p style="text-align: center">
Weź głęboki wdech i odliczaj razem z k!tterem - do przekierowania pozostało: <span id="odliczanie">10</span><br>;)
</p>
<br><br><hr>
<?php									// SAMOCZYNNE PRZEKIEROWANIE
header("Refresh: 10; url=/Warsztaty/logowanie");
require 'footer.php';
die ();
}
?>

<h1 style="text-align: center">
	< <strong><?php echo ucfirst($_SESSION['user_name']) ?>, witaj na <strong><em>k!tterze</em></strong> ></strong>
</h1>

<br>

<div style="text-align: center">
	<fieldset>
	<legend><h3>< Twoje k!tty ></h3></legend>
<br>
	<?php
	$sql = "SELECT * FROM User 
			INNER JOIN Posts 
			ON User.id=Posts.user_id 
			WHERE id=".$_SESSION['user_id']." 
			ORDER BY data DESC";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<fieldset>", 
			     "<strong>", "Treść: ", "</strong>", "<em>".$row["tresc"]."</em>", "<br>", 
				 "<strong>", "Data: ", "</strong>", "<em>".$row["data"]."</em>", "<br>",
				 "<input type='submit' name='deleteK!tt' value='Usuń k!tt!'>", "<br>",
				 "</fieldset>",
				 "<br>";
			}
	}
	else {
		echo ("<strong>Brak k!ttów!</strong><br><br>");
	};
	?>
	</fieldset>
</div>

<br>
<br>

<div style="text-align: center">
	<fieldset>
		<legend><h3>< Twoi przyk!ttaciele ></h3></legend>
		<p>
			<?php								// Wyświetlenie przyjaciół - użyłem aliasów ;) 
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
	} else {
		echo ("<strong>Jeszcze nie masz przyk!ttaciół! :(</strong><br><br>");
	};
	?>
		</p>
	</fieldset>
</div>

<br>
<br>

<div style="text-align: center">
	<fieldset>
	<legend><h3>< Znajdź przyk!ttaciela ></h3></legend>
	<p>(Soon...)</p>
		<form action="#" method="POST">
			<input type="text" name="szukaj" />
			<br>
			<br>
			<input type="submit" value="Szukaj" />
		<br>
		<br>
		</form>
	</fieldset>
</div>

<br>