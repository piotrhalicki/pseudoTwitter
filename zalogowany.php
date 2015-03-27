<?php
require 'header.php';
?>

<hr>
<br>

<?php
// session_start();

echo '<h1>', "Witaj ", $_SESSION['user_name'], "! :)", '</h1>';
echo '<h2>', "Zalogowałeś się na stronie Twitter :)", '</h2>';
?>

<br>
<hr>

<?php
require 'footer.php';
?>