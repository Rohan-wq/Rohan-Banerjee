
<?php
include "connection.php";
@mkdir("Uploads");

$pname 				= $_POST['pname'];
$price 				= $_POST['price'];
$is_available 		= $_POST['is_available'];
$created_date 		= $_POST['created_date'];
$fname   		= $_FILES['image']['name'];  //apple.jpg
$flocation 		= $_FILES['image']['tmp_name'];  //temporary path

$path = "Uploads/".time()."_".$fname;
copy($flocation, $path);

$sql = "INSERT INTO `product_table` (`id`,`pname`,`price`,`is_available`,`product_image`,`created_date`) VALUES (NULL,'$pname','$price','$is_available','$path','$created_date')";

$db->query($sql);


header("location:show.php");


?>