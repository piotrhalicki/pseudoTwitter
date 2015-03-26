<?php
require 'header.php';
?>

<br>
<hr>
<br>


<?php
include("connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "SELECT email FROM User WHERE email = '{$_POST['mail']}'";
    $result = $conn->query($sql);
    	var_dump($sql);
    	echo $conn->error;
    	echo '<br>';
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc());
        $hashed_pass = $row['password'];
        if(password_verify($_POST['pass'], $hashed_pass)){
           $_SESSION['pass'] = $row['password'];
           die();
        };
    };
    echo "Zły login lub złe hasło <br>";
};
?>

<form method="POST" action="#">
    <label>Mail użytkownika:</label><br>
 	   <input name="mail" type="text" value=""/><br>
    <label>Hasło:</label><br>
    	<input name="pass" type="password" value=""/><br>
    <button type="submit">Zaloguj</button>
</form>



<br>
<hr>
<br>

<?php
require 'footer.php';
?>