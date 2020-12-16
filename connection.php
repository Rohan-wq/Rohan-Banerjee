<?php
$db = new MySQLi("localhost","root",NULL,"testdb");

foreach ($_GET as $key => $value) {
	$_GET[$key] = addslashes($value);
}

foreach ($_POST as $key => $value) {
	$_POST[$key] = addslashes($value);
}
?>