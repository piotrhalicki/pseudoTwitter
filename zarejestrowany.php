<?php
//	require 'header.php';
?>

<h1 style="text-align: center">
< <strong>Witaj <?php echo ucfirst($_SESSION['user_name']) ?>! ></strong>
</h1>

<h2 style="text-align: center">
< <strong>Zarejestrowałeś się na <strong><em>k!tterze</em></strong> :) ></strong>
</h2>

<?php
header("Refresh: 10; url=/Warsztaty/body");
?>

<?php
//	require 'footer.php';
?>