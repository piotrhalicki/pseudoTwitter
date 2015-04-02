<?php
	require 'header.php';
?>

<hr>
<br>

<?php

if (isset($_COOKIE["k!tter"])) {
	echo '<h1 style="text-align: center">', ucfirst($_COOKIE['k!tter']), ", witaj na k!tterze! :)", '</h1>';
}
else {
	echo '<h1 style="text-align: center">', ucfirst($_SESSION['user_name']), ", witaj na k!tterze! :)", '</h1>';
}

?>

<br>

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< Dane Twojego profilu: ></h3></legend>
	<p>
		<strong>Longin:</strong> <?php echo $_SESSION['user_name'] ?><br>
		<strong>Emalia:</strong> <?php echo $_SESSION['user_mail'] ?><br>
		<strong>Hasłord: </strong>znasz tylko Ty ;)<br>
		<p><input type="submit" name="modyfikacja" value="mody_k!ttuj profil"><br>(Soon...)<br></p>
	</p>
		</fieldset>
	</p>
</div>

<br>

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

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< Ostatni k!tt: ></h3></legend>
	<p>
<?php

$sql = "SELECT * from Posts WHERE user_id=".$_SESSION['user_id']." ORDER BY data DESC LIMIT 1";
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
	</p>
		</fieldset>
	</p>
</div>

<br>

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

<div style="text-align: center">
	<p>
		<fieldset>
		<legend><h3>< Znajomi k!tterzy ></h3></legend>
	<p>
		tu bedą znajomi k!tterzy
	</p>
		</fieldset>
	</p>
</div>

<br>

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

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if(isset($_POST['deleteUser'])) {
	$conn->query ("DELETE FROM User WHERE id=".$_SESSION['user_id']); // poprawić składnię - $_SESSION powinno byc w {} ?
	echo "profil skasowany";
	}
}

//zapytać czy wyżej może być else... albo sprawdzić ;)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if (isset($_POST['przy_k!ttuj'])) {
		$data = date('Y-m-d H:i:s');
		$conn->query ("insert into Posts (user_id, tresc, data) values ('{$_SESSION['user_id']}', '{$_POST['post']}', '{$_POST['postData']}')");
		echo 'kit dodany';
	} else {
		echo 'cos nie tak';
	}
};

?>

<hr>

<?php
	require 'footer.php';
?>