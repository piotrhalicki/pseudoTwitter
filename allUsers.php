<div style="text-align: center">
	<fieldset>
	<legend><h3>< Wszyscy k!tterzy ></h3></legend>
<?php

$sql = "SELECT name, email FROM User WHERE id<>".$_SESSION['user_id'];
$result = $conn->query ($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<fieldset>",
		"<strong>", "Login: ", "</strong>", "<em>".$row["name"]."</em>", "<br>",
		"<strong>", "e-mail: ", "</strong>", "<em>".$row["email"]."</em>", "<br>",
		"<input type='submit' name='addFriend' value='Dodaj przyk!ttaciela'>", "<br>",
		"</fieldset>",
		"<br>";
	}
}
else {
	echo ("<strong>Brak innych niż Ty użytkowników! ;)</strong><br><br>");
}

?>
</fieldset>
</div>