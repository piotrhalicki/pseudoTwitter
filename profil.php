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
	<legend> < <strong>Dane Twojego profilu:</strong> > </legend>
<p>
	<p><strong>Longin:</strong> <?php echo $_SESSION['user_name'] ?></p>
	<p><strong>Emalia:</strong> <?php echo $_SESSION['user_mail'] ?></p>
	<p><strong>Hasłord: </strong>znasz tylko Ty ;)</p>
	<p><input type="submit" name="modyfikacja" value="mody_k!ttuj profil"></p>
</p>
	</fieldset>
</p>
</div>

<div style="text-align: center">
<form method="POST" action="#">
<p>
	<fieldset>
	<legend> < <strong>Kittuj: (dodaj post)</strong> > </legend>
<p>
	<label>
<p>
	<textarea name="post" cols="50" rows="10" placeholder="Wpisz k!tt... (dodaj post)"></textarea>	
</p>
	<input type="submit" name="przy_k!ttuj" value="przy_k!ttuj">
	</label>
</p>
	</fieldset>	
</p>
</form>
</div>

<div style="text-align: center">
<p>
	<fieldset>
	<legend> < <strong>Wiadomości</strong> > </legend>
<p>
	Wiadomości odebrane<br>
	Wiadomości wysłane<br>
</p>
	</fieldset>
</p>
</div>

<div style="text-align: center">
<p>
	<fieldset>
	<legend> < <strong>Znajomi k!tterzy</strong> > </legend>
<p>
	tu bedą znajomi k!tterzy
</p>
	</fieldset>
</p>
</div>

<div style="text-align: center">
<form method="POST" action="#">
<p>
	<fieldset>
	<legend> < <strong>Odwal k!tte</strong> > </legend>
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
		// $data = date("Y-m-d H:i:s");
		$conn->query ("INSERT INTO Posts (autor, tresc, data) VALUES ('{$_SESSION['user_name']}', '{$_POST['post']}', 'date('Y-m-d H:i:s')')");
		echo 'kit dodany';
	} else {
		echo 'cos nie tak';
		var_dump($_SESSION['user_name']);
		var_dump($_POST['przy_k!ttuj']);
		echo $data;
		var_dump($_POST['post']);
	}
}

?>

<hr>

<?php
require 'footer.php';
?>