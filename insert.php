<?php
include "connection.php";
?>
	<center>
 	<form method = "POST" action = "in.php">
 		<table>
 		<tr>
 			<td><label>id</label></td>
 			<td><input type = "text" name = "id"></td>
 		</tr>
 		
 		<tr>
 			<td><label>pname</label></td>
 			<td><input type = "text" name = "pname" placeholder="Enter product name"></td>
 		</tr>

 		<tr>
 			<td><label>price</label></td>
 			<td><input type = "text" name = "price" placeholder="Enter price"></td>
 		</tr>
		
		<tr>
 			<td><label>is_available</label></td>
 			<td><input type = "text" name = "is_available" placeholder="Enter product availability"></td>
 		</tr>
		
		<tr>
 			<td><label>product_image</label></td>
 			<td><input type = "file" name = "image" placeholder="Enter product image"></td>
 		</tr>
		<tr>
 			<td><label>created_date</label></td>
 			<td><input type = "date" name = "created_date" placeholder="Enter date created"></td>
 		</tr>

 		<tr>
 			<td></td>
 			<td align = "center"><input type = "submit" value = "submit"></td>
 		</tr>
 	</table>


 	</form>
	
