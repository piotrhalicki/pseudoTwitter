<?php
require 'header.php';
?>

<br>
<hr>
<br>


<?php
session_start();
include("connect.php");
/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "SELECT email FROM User WHERE email = '{$_POST['mail']}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc());
        $hashed_pass = $row['password'];
        if(password_verify($_POST['pass'], $hashed_pass)){
           $_POST['pass'] = $row['password'];
           echo "zalogowany";
           die();
        };
    };
    echo "Zły login lub złe hasło <br>";
};
*/


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$sql = "SELECT * FROM User WHERE email = '{$_POST['mail']}'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {

		$row = $result->fetch_assoc();
		$hashed_pass = $row['password'];
		if(password_verify($_POST['pass'], $hashed_pass)){
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['user_name'] = $row['name'];
			var_dump($_SESSION);
		header("Location: /Warsztaty/zalogowany.php");
			die();
		}
	}
	echo("Zły login lub hasło <br>");
}

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