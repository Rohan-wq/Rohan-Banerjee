<?php
include "connection.php";
print "<table border = 1 cellpadding = 10 align = center>
	<tr>
		<th>Id</th>
		<th>Caption</th>
		<th>Image</th>
	</tr>";


$sql = "SELECT * FROM `product_table`";
$res = $db->query($sql);
while($row = $res->fetch_array()){
	print "<tr>
		<td>$row[file_id]</td>
		<td>$row[caption]</td>
		<td><img src = '$row[file_path]'width = 100></td>
	</tr>";
}


?>

</table>
<a href="insertform.php">Insert New Data</a>