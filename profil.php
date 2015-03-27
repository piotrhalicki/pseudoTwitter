<?php
require 'header.php';
?>

<hr>

<?php
echo '<h1>', ucfirst($_SESSION['user_name']), ", witaj na Kitterze! :)", '</h1>';
?>

<p>
<fieldset>
<legend> < <strong>Dane Twojego profilu:</strong> > </legend>
<p>
<strong>Longin:</strong> <?php echo $_SESSION['user_name'] ?><br>
<strong>Emalia:</strong> <?php echo $_SESSION['user_mail'] ?>
</p>
</fieldset>
</p>

<p>
<fieldset>
<legend> < <strong>Kittuj: (dodaj post)</strong> > </legend>
	<p>
	<label>
		<p>
		<textarea name="post" cols="50" rows="10" placeholder="Wpisz Kitt... (dodaj post)"></textarea>	
		</p>
		<input type="submit" value="przyKittuj">
	</label>
	</p>
</fieldset>	
</p>

<p>
<fieldset>
<legend> < <strong>Wiadomości</strong> > </legend>
<p>
Wiadomości odebrane<br>
Wiadomości wysłane<br>
</p>
</fieldset>
</p>

<hr>

<?php
require 'footer.php';
?>