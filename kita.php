										<!-- POWITANIE -->
										
<h1 style="text-align: center">
<strong>< Żegnaj <?php echo ucfirst($_SESSION['user_name']) ?> ></strong>
</h1>

<h2 style="text-align: center">
<strong>< właśnie odwaliłeś k!ttę... ></strong>
</h2>

<p style="text-align: center">
Do ostatecznego pożegnania z k!tterem pozostało: <span id="odliczanie">10</span><br>;)
</p>

<?php									// SAMOCZYNNE PRZEKIEROWANIE
session_destroy();
header("Refresh: 10; url=/Warsztaty/rejestracja");

?>