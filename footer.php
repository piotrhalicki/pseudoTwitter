<dl>
	<dd><strong><a href="index.php">Wróć na stronę główną</a></strong></dd>
	<dd>
	<?php
		if (!$conn->connect_error) {
			echo "Połączenie z bazą ", '<strong>', $baseName, '</strong>', " udane :)", '<br>';
		};
	?>
	</dd>
	<dd><?php echo '<strong>', '<em>', "Ilość wyświetleń strony: ", '</em>', '</strong>', $_SESSION['licznik']; ?></dd>
</dl>