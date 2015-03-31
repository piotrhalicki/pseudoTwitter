<dl>
	<dd><strong><a href="index.php">Wróć na stronę główną</a></strong></dd>
	<dd>
	<?php
		if (!$conn->connect_error) {
			echo "Połączenie z bazą ", '<strong>', $baseName, '</strong>', " udane :)", '<br>';
		}; // w wersji finalnej mogę to usunąć
	?>
	</dd>
	<dd><?php echo '<strong>', '<em>', "Ilość wyświetleń strony: ", '</em>', '</strong>', $_SESSION['licznik']; ?></dd>
	<dd><strong><em style="font-size:10px">* niekiedy strona usiłuje korzystać z "ciasteczek" ;)</em></strong></dd>
</dl>