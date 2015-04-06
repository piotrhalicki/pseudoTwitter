<dl>
	<dd>
	<?php 							// Uzależnienie linkowania od (nie)zalogowania
	if (isset($_SESSION['user_name'])) {
		echo ("<strong><a href='/Warsztaty/body'>Wróć na stronę główną</a></strong>");
	} else {
		echo ("<strong><a href='/Warsztaty/'>Wróć na stronę główną</a></strong>");
	};
	?>
	</dd>
	<dd>
	<?php  							// Sprawdzam połączenie z bazą w wersji finalnej mogę to usunąć
	if (!$conn->connect_error) {
		echo "Połączenie z bazą ", '<strong>', $baseName, '</strong>', " udane :)", '<br>';
	};
	?>
	</dd>
	<dd><?php echo ("<strong><em>Ilość wyświetleń strony: </em></strong>").$_SESSION['licznik']; ?></dd>
	<dd><strong><em style="font-size:10px">* niekiedy strona usiłuje korzystać z "ciasteczek" ;)</em></strong></dd>
</dl>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="alphabet.js"></script> <!-- Skrypt oczywiście nie mój, znaleziony na http://www.codecademy.com/ -->
<script type="text/javascript" src="bubbles.js"></script> <!-- Skrypt oczywiście nie mój, znaleziony na http://www.codecademy.com/ ale modyfikowałem parę linijek-->
<script type="text/javascript" src="main.js"></script>