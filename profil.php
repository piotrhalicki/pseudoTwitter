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
</p>
	</fieldset>
</p>
</div>

<div style="text-align: center">
<p>
	<fieldset>
	<legend> < <strong>Kittuj: (dodaj post)</strong> > </legend>
<p>
	<label>
<p>
	<textarea name="post" cols="50" rows="10" placeholder="Wpisz k!tt... (dodaj post)"></textarea>	
</p>
	<input type="submit" value="przy_k!ttuj">
	</label>
</p>
	</fieldset>	
</p>
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
<p>
	<fieldset>
	<legend> < <strong>Odwal k!tte</strong> > </legend>
<p>
	tu bedzie przycisk usuwający profil ;)
</p>
	</fieldset>
</p>
</div>

<hr>

<?php
require 'footer.php';
?>