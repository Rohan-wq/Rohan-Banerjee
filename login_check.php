<?php
session_start();

if($_SESSION['logged_in'] != true) {

	
	Header("Location: index.php?msg=Please Login First");
}

?>