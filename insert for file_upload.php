<?php
include "connection.php";
@mkdir("Uploads");// to make folder

//print_r($_FILES);

$caption 		= $_POST['caption'];
$fname   		= $_FILES['image']['name'];  //apple.jpg
$flocation 		= $_FILES['image']['tmp_name'];  //temporary path

$path = "Uploads/".time()."_".$fname;
copy($flocation, $path);

$sql = "INSERT INTO `product_table` ( `file_path`) VALUES ('$path')";
$db->query($sql);



header("location:show.php");


?>