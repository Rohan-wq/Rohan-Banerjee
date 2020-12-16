<?php
session_start();

include "connection.php";

$user = $_POST['username'];
$pass = md5($_POST['password']);


$sql = "SELECT * FROM `user` WHERE `email` = '$user' AND 
                                        `password_hash` = '$pass'";
$res = $db->query($sql);
$row = $res->fetch_array();

if($row['fullname']) {

	$_SESSION['logged_in'] = true;
	$_SESSION['fullname']  = $row['fullname'];
	header("Location: show.php");
}
else {
	header("Location: index.php?msg=Incorrect User/Pass. Try Again");
}

?>