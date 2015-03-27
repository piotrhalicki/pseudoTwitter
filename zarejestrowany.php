<?php
require 'header.php';
?>

<br>
<hr>

<?php
//session_start();

echo "Witaj ", $_SESSION['user_name'];
?>

<br>
<hr>

<?php
require 'footer.php';
?>