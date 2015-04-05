<div style="text-align: center">
	<fieldset>
	<legend><h3>< Wszyscy k!tterzy ></h3></legend>
<?php

$sql = "SELECT id, name, email FROM User WHERE id<>".$_SESSION['user_id'];
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
		"<input type='submit' name='addFriend' value='Dodaj przyk!ttaciela'>", "<br>",
		"<input type='submit' name='deleteFriend' value='Usuń przyk!ttaciela'>", "<br>",
		"</fieldset>",
		"</form>",
		"<br>";
	}
}
else {
	echo ("<strong>Brak innych niż Ty użytkowników! ;)</strong><br><br>");
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['addFriend'])) {
		$sql = ("INSERT INTO Friends(friend1_id, friend2_id) VALUES('{$_SESSION['user_id']}', '{$_POST['ID']}')");
		$conn->query ($sql);
		var_dump($_POST);
		var_dump($row['id']);
		var_dump($row['name']);
		echo "przyk!ttaciel dodany :)";
	}
	/*
	if(isset($_POST['deleteFriend'])) {
		$sql = ("";)
		$conn->query ($sql);
		echo 
	}
	*/
}
?>
</fieldset>
</div>